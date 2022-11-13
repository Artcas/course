<?php

namespace App\Services\MessageScrapper;

use App\Services\Contracts\MessageScrapperInterface;
use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use function Clue\StreamFilter\fun;

class MessageScrapperService implements MessageScrapperInterface
{
    public function sendWelcome()
    {
        
    }
    //

    private function prepareOrdersBody($orders)
    {
        $body = '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important; margin-top: 20px; margin-bottom: 20px; border: 1px solid #c8c8c8;">
<thead>
<tr>
<th style="text-align: center;padding: 10px 15px;line-height: 1;font-weight: bold;background: #1072b9;color: #fff;">' . __('emails.orders_report_h1') . '</th>
<th style="text-align: center;padding: 10px 15px;line-height: 1;font-weight: bold;background: #1072b9;color: #fff;">' . __('emails.orders_report_h2') . '</th>
<th style="text-align: center;padding: 10px 15px;line-height: 1;font-weight: bold;background: #1072b9;color: #fff;">' . __('emails.orders_report_h3') . '</th>
<th style="text-align: center;padding: 10px 15px;line-height: 1;font-weight: bold;background: #1072b9;color: #fff;">' . __('emails.orders_report_h4') . '</th>
</tr>
</thead>
<tbody>';

//        Order Number - Price - Customer - Company Code

        foreach ($orders as $order) {
            $body .= '<tr>
<td style="border: 1px solid #c8c8c8;padding: 10px 15px;line-height: 1;text-align: center;"><a href="' . env('APP_URL') . '/resources/orders/' . $order->id . '">#' . $order->order_id . '</a></td>
<td style="border: 1px solid #c8c8c8;padding: 10px 15px;line-height: 1;text-align: center;">$' . $order->price . '</td>
<td style="border: 1px solid #c8c8c8;padding: 10px 15px;line-height: 1;">' . $order->customer->first_name . ' ' . $order->customer->last_name . '</td>
<td style="border: 1px solid #c8c8c8;padding: 10px 15px;line-height: 1;text-align: center;">' . $order->garage->address_line_1 . '</td>
</tr>';
        }

        $body .= '</tbody></table>';

        return $body;
    }

    private function prepareOrdersBodyPlain($orders)
    {
        $body = '';

        foreach ($orders as $order) {
            $body .= '
' . __('emails.orders_report_h1') . ': ' . $order->order_id . '
' . __('emails.orders_report_h2') . ': $' . $order->price . '
' . __('emails.orders_report_h3') . ': ' . $order->customer->first_name . ' ' . $order->customer->last_name . '
' . __('emails.orders_report_h4') . ': ' . $order->garage->address_line_1 . '
' . __('emails.orders_report_field_link') . ': ' . env('APP_URL') . '/resources/orders/' . $order->id . '
';
        }

        $body .= '</table>';

        return $body;
    }

    private function prepareReviewsBody($reviews)
    {
        $body = '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important; padding-top: 30px;">';

        foreach ($reviews as $review) {
            $body .= '<tr>
<td>
<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important; padding-top: 30px; padding-bottom: 30px; border-top: 1px solid #c8c8c8;">
<tr>
<td><strong>' . $review->garage->address_line_1 . ' - ' . $review->customer->first_name . ' ' . $review->customer->last_name . ' <a href="' . env('APP_URL') . '/resources/orders/' . $review->id . '">#' . $review->order_id . '</a></strong></td>
</tr>
<tr>
<td>' . __('emails.orders_report_field_rate') . ': ' . $review->rate . '</td>
</tr>
<tr>
<td>' . __('emails.orders_report_field_feedback') . ': ' . $review->feedback . '</td>
</tr>
</table>
</td>
</tr>';
        }

        $body .= '</table>';

        return $body;
    }

    private function prepareReviewsBodyPlain($reviews)
    {
        $body = '';

        foreach ($reviews as $review) {
            $body .= '
' . $review->garage->address_line_1 . ' - ' . $review->customer->first_name . ' ' . $review->customer->last_name . ' #' . $review->order_id . '
' . __('emails.orders_report_field_link') . ': ' . env('APP_URL') . '/resources/orders/' . $review->id . '
' . __('emails.orders_report_field_rate') . ': ' . $review->rate . '
' . __('emails.orders_report_field_feedback') . ': ' . $review->feedback . '
';
        }

        $body .= '</table>';

        return $body;
    }

    private function sendOrderData($data, $order, $toBeScrappedExtend = [])
    {
        $data = $this->prepareEmailBody($data, 'email_content');

        $toBeScrapped = array_merge([
            '{customerFirstName}' => $order->customer->first_name,
            '{orderDetails}'      => $this->orderDetails($order),
        ], $toBeScrappedExtend);

        $data['email_content'] = $this->scrapContent($data['email_content'], $toBeScrapped);
        $data['email_content_plain'] = $this->scrapContent($data['email_content_plain'], $toBeScrapped, true);

        if (isset($data['sms_content']) && $data['sms_content'])
            $data['sms_content'] = $this->scrapContent($data['sms_content'], $toBeScrapped, true);

        if (isset($data['one_signal_content']) && $data['one_signal_content'])
            $data['one_signal_content'] = $this->scrapContent($data['one_signal_content'], $toBeScrapped, true);

        return $data;
    }

    private function scrapContent($content, $toBeScrapper, $stripTags = false)
    {
        foreach ($toBeScrapper as $key => $value)
            $content = str_replace($key, ($stripTags ? strip_tags($value) : $value), $content);

        return $content;
    }

    private function prepareEmailBody($data, $key)
    {
        $items = explode(PHP_EOL, $data[$key]);

        $content = '';

        foreach ($items as $item) {
            if ($item)
                $content .= '<tr>
<td style="padding-bottom: 20px; text-align: left; font-size: 16px">
' . $item . '
</td>
</tr>';
        }

        $data[$key] = $content;

        return $data;
    }

    private function orderDetails($order)
    {
        $vehicle = ($order->vehicle_array && count($order->vehicle_array)) ? \App\Models\Vehicle::whereIn('id', $order->vehicle_array)->first() : \App\Models\Vehicle::first();

        $dateFormat = 'dddd MMM Do, Y, hh:mm a';

        return '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important">
<tr>
  <td colspan="2" style="text-align: center; font-weight: bold;"><strong>' . __('emails.order_details') . '</strong></td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.order_number') . '</strong></td>
  <td><a href="' . str_replace('manage.', '', URL::to('/orders/' . $order->slug)) . '">' . $order->order_id . '</a></td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.order_location') . '</strong></td>
  <td>' . $order->garage->address_line_1 . ' New York, ' . $order->garage->state . ' ' . $order->garage->postal_code . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.order_vehicle_type') . '</strong></td>
  <td>' . ($vehicle ? $vehicle->name : '') . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.order_enter_after') . '</strong></td>
  <td>' . Carbon::parse($order->start_at)->setTimezone(config('app.timezone_interface'))->isoFormat($dateFormat) . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.order_exit_by') . '</strong></td>
  <td>' . Carbon::parse($order->ends_at)->setTimezone(config('app.timezone_interface'))->isoFormat($dateFormat) . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.order_total') . '</strong></td>
  <td>$' . str_replace('$', '', $order->price) . '</td>
</tr>
</table>';
    }

    private function paymentDetails($monthlyPayment)
    {
        return '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important">
<tr>
  <td colspan="2" style="text-align: center; font-weight: bold;"><strong>' . __('emails.payment_details') . '</strong></td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.payment_number') . '</strong></td>
  <td>' . $monthlyPayment->id . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.payment_garage') . '</strong></td>
  <td>' . $monthlyPayment->garage->address_line_1 . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.payment_customer') . '</strong></td>
  <td>' . $monthlyPayment->customer->first_name . ' ' . $monthlyPayment->customer->last_name . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.payment_deactivate_reason') . '</strong></td>
  <td>' . $monthlyPayment->deactivate_reason . '</td>
</tr>
</table>';
    }

    private function paymentDetailsPlain($monthlyPayment)
    {
        return __('emails.payment_details') . '
' . __('emails.payment_number') . ': ' . $monthlyPayment->id . '
' . __('emails.payment_garage') . ': ' . $monthlyPayment->garage->address_line_1 . '
' . __('emails.payment_customer') . ': ' . $monthlyPayment->customer->first_name . ' ' . $monthlyPayment->customer->last_name . '
' . __('emails.payment_deactivate_reason') . ': ' . $monthlyPayment->deactivate_reason;
    }

    private function managerNotification($monthlyCustomer)
    {
        return '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important">
<tr>
  <td colspan="2" style="text-align: center; font-weight: bold;"><strong>' . __('emails.customer_details') . '</strong></td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.garage') . '</strong></td>
  <td>' . $monthlyCustomer->garage->gname . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.first_name') . '</strong></td>
  <td>' . $monthlyCustomer->first_name . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.last_name') . '</strong></td>
  <td>' . $monthlyCustomer->last_name . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.email') . '</strong></td>
  <td>' . $monthlyCustomer->email . '</td>
</tr>
<tr>
  <td style="width: 140px;"><strong>' . __('emails.phone_number') . '</strong></td>
  <td>' . $monthlyCustomer->phone_number . '</td>
</tr>
</table>';
    }

    private function managerNotificationPlain($monthlyCustomer)
    {
        return __('emails.customer_details') . '
' . __('emails.garage') . ': ' . $monthlyCustomer->garage->gname . '
' . __('emails.first_name') . ': ' . $monthlyCustomer->first_name . '
' . __('emails.last_name') . ': ' . $monthlyCustomer->last_name . '
' . __('emails.email') . ': ' . $monthlyCustomer->email . '
' . __('emails.phone_number') . ': ' . $monthlyCustomer->phone_number;

    }

    private function monthlyExcelContent($tCount, $eCount, $wCount, $dCount, $nCount, $aCount)
    {
        return '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important">
                    <tr>
                        <td colspan="2" style="text-align: center; font-weight: bold;"><strong>' . __('emails.report_details') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $tCount . '</td>
                        <td><strong>' . __('emails.total_count') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $eCount . '</td>
                        <td><strong>' . __('emails.error_count') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $wCount . '</td>
                        <td><strong>' . __('emails.warning_count') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $dCount . '</td>
                        <td><strong>' . __('emails.declined_count') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $nCount . '</td>
                        <td><strong>' . __('emails.notices_count') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $aCount . '</td>
                        <td><strong>' . __('emails.approved_count') . '</strong></td>
                    </tr>
              </table>';
    }

    private function monthlyExcelContentPlain($tCount, $eCount, $wCount, $dCount, $nCount, $aCount)
    {
        return __('emails.report_details') . '
        '.$tCount.' : ' . __('emails.total_count') . '
        '.$eCount.' : ' . __('emails.error_count') . '
        '.$wCount.' : ' . __('emails.warning_count') . '
        '.$dCount.' : ' . __('emails.declined_count') . '
        '.$nCount.' : ' . __('emails.notices_count') . '
        '.$aCount.' : ' . __('emails.approved_count');
    }

    private function monthlyExcelAfterContent($tCount, $eCount, $wCount, $nCount)
    {
        return '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important">
                    <tr>
                        <td colspan="2" style="text-align: center; font-weight: bold;"><strong>' . __('emails.report_details_after') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $tCount . '</td>
                        <td><strong>' . __('emails.total_count_after') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $eCount . '</td>
                        <td><strong>' . __('emails.error_count_after') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $wCount . '</td>
                        <td><strong>' . __('emails.warning_count_after') . '</strong></td>
                    </tr>

                    <tr>
                        <td>' . $nCount . '</td>
                        <td><strong>' . __('emails.notices_count_after') . '</strong></td>
                    </tr>

              </table>';
    }

    private function monthlyExcelAfterContentPlain($tCount, $eCount, $wCount, $nCount)
    {
        return __('emails.report_details_after') . '
        '.$tCount.' : ' . __('emails.total_count_after') . '
        '.$eCount.' : ' . __('emails.error_count_after') . '
        '.$wCount.' : ' . __('emails.warning_count_after') . '
        '.$nCount.' : ' . __('emails.notices_count_after');
    }

    private function oneTimePaymentNotificationContent($monthlyCustomer, $data, $oversizeCost, $luxuryCost, $tax)
    {
        $license_plate = '';
        $make = '';
        $model = '';
        $year  = '';
        $color = '';

        if($monthlyCustomer->vehicle) {
            $license_plate = $monthlyCustomer->vehicle->license_plate;
            $make          = $monthlyCustomer->vehicle->make;
            $model         = $monthlyCustomer->vehicle->model;
            $year          = $monthlyCustomer->vehicle->year;
            $color         = $monthlyCustomer->vehicle->color;
        }

        if($data['monthly_rate'] && $tax)
            $rate = $data['monthly_rate'] - $tax;
        else
            $rate = $data['amount'];

        $access_card_cost = $monthlyCustomer->garage->access_card_cost ?: '0.00';


        return '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important">
                    <tr>
                        <td colspan="2" style="text-align: center; font-weight: bold;"><strong>' . __('emails.reservation_details') . '</strong></td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.customer_number') . '</strong></td>
                        <td>' . $monthlyCustomer->customer_no . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.space_number') . '</strong></td>
                        <td>' . str_pad($monthlyCustomer->space_number, 4, '0', STR_PAD_LEFT) . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.parking_start') . '</strong></td>
                        <td>' . Carbon::parse($data['start_date'])->format('D M. d, Y') . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.paid_through') . '</strong></td>
                        <td>' . Carbon::parse($data['start_date'])->format('D M. d, Y') . ' - ' . Carbon::parse($data['next'])->subMonth()->endOfMonth()->format('D M. d, Y')  . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.parking_rate') . '</strong></td>
                        <td>$' . number_format($rate , 2) . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.oversize_rate') . '</strong></td>
                        <td>$' . $oversizeCost . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.luxury_rate') . '</strong></td>
                        <td>$' . $luxuryCost . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.access_card') . '</strong></td>
                        <td>$' . $access_card_cost . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.tax') . '</strong></td>
                        <td>$' . $tax . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.total') . '</strong></td>
                        <td>$' . $data['amount'] . '</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.facility_address') . '</strong></td>
                        <td>' . $monthlyCustomer->garage->address_line_1 . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.hours_operation') . '</strong></td>
                        <td>' . $data['working_hours']['working_hours'] . '</td>
                    </tr>
                     <tr>
                        <td style="width: 140px;"><strong>' . __('emails.p_phone_number') . '</strong></td>
                        <td>' . $monthlyCustomer->garage->phone . '</td>
                    </tr>
                     <tr>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.parker_name') . '</strong></td>
                        <td>' . $monthlyCustomer->first_name . ' '.$monthlyCustomer->last_name.'</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.parker_email') . '</strong></td>
                        <td>' . $monthlyCustomer->email . '</td>
                    </tr>

                    <tr >
                        <td style="width: 140px;"><strong>' . __('emails.license_plate') . '</strong></td>
                        <td>' . $license_plate . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.vehicle_make') . '</strong></td>
                        <td>' . $make  . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.vehicle_model') . '</strong></td>
                        <td>' . $model . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.vehicle_year') . '</strong></td>
                        <td>' . $year . '</td>
                    </tr>
                    <tr>
                        <td style="width: 140px;"><strong>' . __('emails.vehicle_color') . '</strong></td>
                        <td>' . $color . '</td>
                    </tr>
                </table>';
    }

    private function oneTimePaymentNotificationContentPlain($monthlyCustomer, $array, $oversizeCost, $luxuryCost, $tax)
    {

        $license_plate = '';
        $make = '';
        $model = '';
        $year  = '';
        $color = '';

        if($monthlyCustomer->vehicle) {
            $license_plate = $monthlyCustomer->vehicle->license_plate;
            $make          = $monthlyCustomer->vehicle->make;
            $model         = $monthlyCustomer->vehicle->model;
            $year          = $monthlyCustomer->vehicle->year;
            $color         = $monthlyCustomer->vehicle->color;
        }

        if($array['monthly_rate'] && $tax)
            $rate = $array['monthly_rate'] - $tax;
        else
            $rate = $array['amount'];

        $access_card_cost = $monthlyCustomer->garage->access_card_cost ?: '0.00';

        return __('emails.reservation_details') . '
                ' . __('emails.customer_number') . ': ' . $monthlyCustomer->customer_no . '
                ' . __('emails.space_number') . ': ' . str_pad($monthlyCustomer->space_number, 4, '0', STR_PAD_LEFT) . '
                ' . __('emails.parking_start') . ': ' . Carbon::parse($array['start_date'])->format('D M. d, Y') . '
                ' . __('emails.paid_through') . ': ' . Carbon::parse($array['start_date'])->format('D M. d, Y') . ' - ' .  Carbon::parse($array['next'])->subMonth()->endOfMonth()->format('D M. d, Y') . '
                ' . __('emails.parking_rate') . ': $' . $rate . '
                ' . __('emails.oversize_rate') . ': $' . $oversizeCost . '
                ' . __('emails.luxury_rate') . ': $' . $luxuryCost . '
                ' . __('emails.access_card') . ': $' . $access_card_cost . '
                ' . __('emails.tax') . ': $' . $tax . '
                ' . __('emails.total') . ': $' . $array['amount'] . '
                ' . __('emails.facility_address') . ': ' . $monthlyCustomer->garage->address_line_1 . '
                ' . __('emails.hours_operation') . ': ' . $array['working_hours']['working_hours'] . '
                ' . __('emails.p_phone_number') . ': ' . $monthlyCustomer->garage->phone . '
                ' . __('emails.parker_name') . ': ' . $monthlyCustomer->first_name . ' '.$monthlyCustomer->last_name.'
                ' . __('emails.parker_email') . ': ' . $monthlyCustomer->email . '
                ' . __('emails.license_plate') . ': ' . $license_plate . '
                ' . __('emails.vehicle_make') . ': ' .  $make . '
                ' . __('emails.vehicle_model') . ': ' . $model . '
                ' . __('emails.vehicle_year') . ': ' . $year . '
                ' . __('emails.vehicle_color') . ': ' . $color;
    }

    private function monthlyPaymentContent($tCount, $eCount, $wCount, $nCount, $uCount, $sCount)
    {
        return '<table cellpadding="0" cellspacing="0" border="0" width="100%" style="width: 100% !important">
                    <tr>
                        <td colspan="2" style="text-align: center; font-weight: bold;"><strong>' . __('emails.report_details') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $tCount . '</td>
                        <td><strong>' . __('emails.payment_total') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $eCount . '</td>
                        <td><strong>' . __('emails.payment_error') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $wCount . '</td>
                        <td><strong>' . __('emails.payment_warning') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $nCount . '</td>
                        <td><strong>' . __('emails.payment_notices') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $uCount . '</td>
                        <td><strong>' . __('emails.payment_updated') . '</strong></td>
                    </tr>
                    <tr>
                        <td>' . $sCount . '</td>
                        <td><strong>' . __('emails.payment_skip') . '</strong></td>
                    </tr>
              </table>';
    }

    private function monthlyPaymentContentPlain($tCount, $eCount, $wCount, $nCount, $uCount, $sCount)
    {
        return __('emails.report_details') . '
        '.$tCount.' : ' . __('emails.payment_total') . '
        '.$eCount.' : ' . __('emails.payment_error') . '
        '.$wCount.' : ' . __('emails.payment_warning') . '
        '.$nCount.' : ' . __('emails.payment_notices') . '
        '.$uCount.' : ' . __('emails.payment_updated') . '
        '.$sCount.' : ' . __('emails.payment_skip');
    }

}


