{{-- resources/views/livewire/item-list.blade.php --}}

<div>
    @php
        use App\Models\User;
    @endphp

    <div class="gap gray-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row" id="page-contents">
                        @include('frontend.body.header')

                        @include('frontend.body.rightsidebar')

                        <div class="col-lg-6">
                            <div class="central-meta">
                                <div class="messages">
                                    <h5 class="f-title"><i class="ti-bell"></i>All Messages <span class="more-options"><i class="fa fa-ellipsis-h"></i></span></h5>
                                    <div class="message-box">

                                        <div class="peoples-mesg-box">
                                            <div class="conversation-head">
                                                <figure><img src="images/resources/friend-avatar.jpg" alt=""></figure>
                                                <span>{{$user->name}}<i>online</i></span>
                                            </div>
                                            <ul class="chatting-area">
                                                @forelse ($messages as $message)
                                                @if ($message->friend_id == auth()->id())
                                                <li class="you">
                                                    <figure><img src="images/resources/userlist-2.jpg" alt=""></figure>
                                                    <p>{{$message->message}}</p>
                                                </li>
                                                @else
                                                <li class="me">
                                                    <figure><img src="images/resources/userlist-1.jpg" alt=""></figure>
                                                    <p>{{$message->message}}</p>
                                                </li>

                                                @endif
                                            </ul>
                                            <div class="message-text-container">
                                                <form method="post">
                                                    <textarea></textarea>
                                                    <button title="send"><i class="fa fa-paper-plane"></i></button>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('frontend.body.liftsidebar')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('frontend.body.footer')
</div>
