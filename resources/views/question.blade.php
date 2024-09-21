@extends('layouts.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/css/question.css') }}">
@endsection

@section('title', 'Question Page')

@section('content')
    <div class="question_bg_1">
        <div class="container ">
            <h2 class="question_h2">
                Câu hỏi thường gặp
            </h2>
        </div>
    </div>
    <div class="container_question">
        <ol class="menu_ol">
            <li>
                <h2 class="question_cs">Nguồn lực nhân sự  <img src="images/plus-sign_1.png" alt="plus-sign_1.png"> </h2>
                <p class="p_introduce">
                    Có, Thăng Long Steel cung cấp dịch vụ điêu khắc tùy chỉnh theo yêu cầu của khách hàng. Chúng tôi sẵn sàng biến ý tưởng của bạn thành những tác phẩm nghệ thuật độc đáo và phù hợp với mong muốn của bạn. Đội ngũ nghệ nhân tài năng của chúng tôi sẽ làm việc chặt chẽ với bạn từ khâu thiết kế đến hoàn thiện, đảm bảo sản phẩm cuối cùng không chỉ đáp ứng mà còn vượt qua sự mong đợi của bạn.
                </p>
            </li>
            <li>
                <p class="question_cs">Thời gian hoàn thành một tác phẩm điêu khắc là bao lâu? <img src="images/plus-sign.png" alt="plus-sign.png">   </p>
            </li>
            <li>
                <p class="question_cs">Chất liệu chính mà Thăng Long Steel sử dụng để chế tác điêu khắc là gì?<img src="images/plus-sign.png" alt="plus-sign.png">  </p>
            </li>
            <li>
                <p class="question_cs">Chất liệu chính mà Thăng Long Steel sử dụng để chế tác điêu khắc là gì?<img src="images/plus-sign.png" alt="plus-sign.png"></p>
            </li>
            <li>
                <p class="question_cs">Tôi có thể yêu cầu báo giá trước khi đặt hàng một tác phẩm điêu khắc tùy chỉnh không?<img src="images/plus-sign.png" alt="plus-sign.png"></p>
            </li>
        </ol>
    </div>

@endsection