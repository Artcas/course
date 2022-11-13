import HomeComponent from "./components/pages/HomeComponent";
import PersonalComponent from "./components/pages/PersonalComponent";
import StudentsComponent from "./components/pages/StudentsComponent";
import ImportMembersComponent from "./components/pages/ImportMembersComponent";
import OrdersComponent from "./components/pages/OrdersComponent";
import PendingOrdersComponent from "./components/pages/PendingOrdersComponent";
import PaymentComponent from "./components/pages/PaymentComponent";
import PendingPaymentsComponent from "./components/pages/PendingPaymentsComponent";
import CoursesComponent from "./components/pages/CoursesComponent";
import CourseCategoriesComponent from "./components/pages/CourseCategoriesComponent";
import QuizzesComponent from "./components/pages/QuizzesComponent";
import DifficultiesComponent from "./components/pages/DifficultiesComponent";
import AssignmentComponent from "./components/pages/AssignmentComponent";
import ProductComponent from "./components/pages/ProductComponent";
import ArticleComponent from "./components/pages/ArticleComponent";
import ArticleCategoriesComponent from "./components/pages/ArticleCategoriesComponent";
import CommentComponent from "./components/pages/CommentComponent";
import ReviewsComponent from "./components/pages/ReviewsComponent";
import CouponsComponent from "./components/pages/CouponsComponent";
import AffiliatesComponent from "./components/pages/AffiliatesComponent";

import VueRouter from "vue-router";

const routes = {
    history: true,
    mode: 'history',
    props: true,
    routes : [
        {
            path      : '/',
            name      : 'home',
            component : HomeComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/students',
            name      : 'students',
            component : StudentsComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/members',
            name      : 'members',
            component : PersonalComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/members/import',
            name      : 'membersImport',
            component : ImportMembersComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/orders',
            name      : 'orders',
            component : OrdersComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/orders/pending',
            name      : 'ordersPending',
            component : PendingOrdersComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/transactions',
            name      : 'payments',
            component : PaymentComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/transactions/withdraw',
            name      : 'paymentsPending',
            component : PendingPaymentsComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/courses',
            name      : 'courses',
            component : CoursesComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/quizzes',
            name      : 'quizzes',
            component : QuizzesComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/categories',
            name      : 'categories',
            component : CourseCategoriesComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/difficulties',
            name      : 'difficulties',
            component : DifficultiesComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/assignments',
            name      : 'assignments',
            component : AssignmentComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/products',
            name      : 'products',
            component : ProductComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/articles',
            name      : 'articles',
            component : ArticleComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/article-categories',
            name      : 'articleCategory',
            component : ArticleCategoriesComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/comments',
            name      : 'comments',
            component : CommentComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/reviews',
            name      : 'reviews',
            component : ReviewsComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/coupons',
            name      : 'coupons',
            component : CouponsComponent,
            meta      : {
                auth: undefined
            }
        },
        {
            path      : '/admin/affiliates',
            name      : 'affiliates',
            component : AffiliatesComponent,
            meta      : {
                auth: undefined
            }
        }
    ]
}

const router = new VueRouter(routes)

export default router
