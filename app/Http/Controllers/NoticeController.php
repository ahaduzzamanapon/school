<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeController extends Controller
{
    function __invoke($notice)
    {
        $noticeTitle = str_replace('-', ' ', $notice);
        switch ($notice) {
            case 'Production-Storage-Transfer-Transport-Supply-Distribution-andMarketing':
                return view('website_view.show-notice', ['noticeTitle' => $noticeTitle, 'notice' => 'Production, Storage, Transfer, Transport, Supply, Distribution and Marketing of Foodstuffs (Prevention of Harmful Activities) Act, 2023']);
            case 'Regarding-attendingthe-hearing-withnecessary-documents':
                return view('website_view.show-notice', ['noticeTitle' => $noticeTitle, 'notice' => 'Regarding attending the hearing with necessary documents.']);
            case 'Meeting-toreview-the-draft-policyregarding-tuition':
                return view('website_view.show-notice', ['noticeTitle' => $noticeTitle, 'notice' => 'Meeting to review the draft policy regarding tuition fees of private educational institutions under the secondary and higher education department.']);
            case 'Sent-Up-I(Promotion)-ExamRoutine':
                return view('website_view.show-notice', ['noticeTitle' => $noticeTitle, 'notice' => 'Regarding attending the hearing with necessary documents.']);
            case 'Tuition-feepayment-method-throughRocket-and-Nexus-Pay':
                return view('website_view.show-notice', ['noticeTitle' => $noticeTitle, 'notice' => 'Tuition fee payment method through Rocket and Nexus Pay']);
            default:
                return view('website_view.show-notice', ['noticeTitle' => $noticeTitle . ' Not Found', 'notice' => '']);
        }
    }
}
