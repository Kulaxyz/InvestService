@extends('layouts.app')

@section('content')
    <div class="cabinet__wrap2">
        <!-- хлебные крошки -->
        <div class="cabinet__breadcrumbs">
            <p id="page__name">Deposit Creation</p>
            <ul class="breadcrumbs__list">
                <li class="list__item">
                    <a href="{{ route('wallet') }}"> Main </a>
                </li>
                <li class="list__item">
                    <a href="{{ route('wallet') }}">Personal Account</a>
                </li>
                <li class="list__item">
                    <a href="#">Deposit Creation</a>
                </li>
            </ul>
        </div>
        <main class="cabinet__content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <p class="pretitle">Создание Депозита</p>
                        <div class="balance card">
                            <div class="card-header card-header-white">
                                ВАШ БАЛАНС
                                <span class="info">i
                    <div class="info__hover">
                      Сумма на вашем счету, доступная для вывода или создания новых депозитов
                    </div>
                  </span>
                            </div>
                            <div class="card-header-gray">
                                <p><span id="money">{{ auth()->user()->balance }}</span> $</p>
                            </div>
                            <div class="card-body">
                                <h2 class="card-action">Выберите условия депозита</h2>
                                <div class="card-buttons">
                                    <button data-number="1" class="card-button card-button-selected">

                                        <h3 class="title"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M15.9307 0.482305C15.9066 0.26441 15.7346 0.0922907 15.5166 0.0681208C11.8071 -0.343866 8.64498 1.14002 6.06563 3.79517C5.32747 4.55506 4.68721 5.35938 4.1407 6.13563C3.21578 6.09803 2.19026 6.51649 1.46321 7.24354L0.137286 8.56946C-0.012738 8.71949 -0.0432556 8.95167 0.0628235 9.13538C0.168903 9.3191 0.385089 9.40858 0.590167 9.35377C0.897784 9.27112 1.39766 9.17505 1.87789 9.15272C2.05342 9.14454 2.1993 9.1471 2.32051 9.15638C2.02791 9.71912 1.80367 10.1906 1.72933 10.3086C1.61287 10.4939 1.63985 10.735 1.79464 10.8898L2.56185 11.657C1.44527 13.1798 1.42684 13.9597 1.43074 14.0702C1.43892 14.3042 1.62142 14.5234 1.92366 14.5234C2.18538 14.5234 2.93599 14.4124 4.30245 13.3976L5.10945 14.2046C5.26534 14.3605 5.50887 14.3866 5.69442 14.2675C5.82064 14.1863 6.26436 13.9714 6.79647 13.6934C6.80525 14.09 6.75142 14.6724 6.6346 15.4618C6.56819 15.9096 7.11251 16.1791 7.42977 15.8619L8.75569 14.536C9.43941 13.8523 9.83589 12.8368 9.8066 11.8842C10.6243 11.3127 11.4751 10.6387 12.2694 9.85975C14.8992 7.28077 16.3375 4.14258 15.9307 0.482305ZM15.034 0.964727C15.1088 1.97547 15.029 2.95521 14.7965 3.90333C14.219 3.72144 13.6544 3.36414 13.1445 2.85438C12.6328 2.34253 12.2747 1.77564 12.0936 1.19605C13.0413 0.966925 14.0217 0.889288 15.034 0.964727ZM1.81673 8.21595L2.12606 7.9065C2.5002 7.53248 2.98677 7.26307 3.47066 7.14197C3.21785 7.54322 2.99251 7.9264 2.79378 8.28004C2.48677 8.21229 2.14547 8.19971 1.81673 8.21595ZM2.70381 10.4732C2.80526 10.273 2.92794 10.022 3.15316 9.59644L3.77022 10.2136C3.54061 10.46 3.33333 10.694 3.14656 10.9158L2.70381 10.4732ZM4.99617 10.2938C5.33773 9.9524 5.66524 9.89002 6.0721 9.88123C6.06319 10.2777 5.99959 10.6163 5.65914 10.9568C4.20381 12.4121 3.20626 13.062 2.6097 13.3521C2.90401 12.744 3.55562 11.7344 4.99617 10.2938ZM5.52339 13.2927L5.04 12.8092C5.2607 12.6217 5.49398 12.4138 5.74007 12.1834L6.39693 12.8402C5.96504 13.0708 5.78487 13.1576 5.52339 13.2927ZM8.09261 13.8731L7.71736 14.2484C7.74776 13.7937 7.73726 13.4624 7.69429 13.2068C8.03902 13.0127 8.41341 12.7926 8.80574 12.5464C8.69393 13.042 8.44258 13.5232 8.09261 13.8731ZM7.25032 12.3678L6.40987 11.5272C7.03182 10.8429 7.00862 10.1835 7.00862 9.41309C7.00862 9.15418 6.79879 8.94434 6.53987 8.94434C5.82015 8.94434 5.12752 8.90577 4.42574 9.54322L3.62313 8.74061C5.81478 4.89747 8.3481 2.46436 11.1944 1.46241C11.4198 2.19153 11.8584 2.89405 12.4816 3.51734C13.102 4.13782 13.8012 4.57532 14.5272 4.80152C13.5194 7.63221 11.0869 10.1639 7.25032 12.3678Z"
                                                        fill="white" />
                                                    <path
                                                        d="M11.8185 4.18018C10.9046 3.26636 9.41754 3.26636 8.50372 4.18018C7.5899 5.09412 7.5899 6.58118 8.50372 7.495C9.41754 8.40881 10.9046 8.40894 11.8185 7.495C12.7324 6.58118 12.7324 5.09412 11.8185 4.18018ZM11.1556 6.83203C10.6072 7.38037 9.7149 7.38037 9.16669 6.83203C8.61835 6.28369 8.61835 5.39148 9.16669 4.84314C9.7149 4.29492 10.6071 4.2948 11.1556 4.84314C11.7039 5.39148 11.7039 6.28369 11.1556 6.83203Z"
                                                        fill="white" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg><span> 1 месяц</span></h3>
                                        <ul>
                                            <li class="true">5% в месяц</li>
                                            <li class="false">Капитализация: нет</li>
{{--                                            <li class="false">Бонус: нет</li>--}}
                                        </ul>
                                    </button>
                                    <button data-number="3" class="card-button">


                                        <h3 class="title"><svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M14.5938 0C14.3668 0 1.63232 0 1.40625 0C0.630859 0 0 0.630859 0 1.40625V2.12048C0 3.27734 0.397949 4.41199 1.12073 5.31531C1.7218 6.06665 2.57678 6.65515 3.5282 6.97229L4.02502 7.13782C4.60205 8.078 5.50708 8.80225 6.59375 9.14624V9.875C6.59375 10.1334 6.38342 10.3438 6.125 10.3438C5.34961 10.3438 4.71875 10.9746 4.71875 11.75V12.2188H4.25C3.99109 12.2188 3.78125 12.4286 3.78125 12.6875V15.0625H3.3125C3.05359 15.0625 2.84375 15.2723 2.84375 15.5312C2.84375 15.7902 3.05359 16 3.3125 16H12.6875C12.9464 16 13.1562 15.7902 13.1562 15.5312C13.1562 15.2723 12.9464 15.0625 12.6875 15.0625H12.2188V12.6875C12.2188 12.4286 12.0089 12.2188 11.75 12.2188H11.2812V11.75C11.2812 10.9746 10.6504 10.3438 9.875 10.3438C9.61658 10.3438 9.40625 10.1334 9.40625 9.875V9.14624C10.4917 8.80261 11.3959 8.07971 11.973 7.14099L12.4969 6.97424C12.4989 6.97363 12.501 6.9729 12.5029 6.97229C13.4403 6.65979 14.2621 6.08679 14.8793 5.31531C15.6021 4.41199 16 3.27734 16 2.12048V1.40625C16 0.630859 15.3691 0 14.5938 0ZM1.85278 4.72961C1.26257 3.99182 0.9375 3.06531 0.9375 2.12048V1.40625C0.9375 1.14783 1.14783 0.9375 1.40625 0.9375H2.89294L3.37 5.23096C3.39795 5.48206 3.44666 5.72729 3.51331 5.96533C2.85779 5.68982 2.27637 5.25903 1.85278 4.72961ZM4.71875 15.0625V13.1562H11.2812V15.0625H4.71875ZM8.8324 8.33179C8.61951 8.38074 8.46875 8.57019 8.46875 8.78857V9.875C8.46875 10.6504 9.09961 11.2812 9.875 11.2812C10.1334 11.2812 10.3438 11.4916 10.3438 11.75V12.2188H5.65625V11.75C5.65625 11.4916 5.86658 11.2812 6.125 11.2812C6.90039 11.2812 7.53125 10.6504 7.53125 9.875V8.78857C7.53125 8.57019 7.38049 8.38074 7.1676 8.33179C5.62695 7.97729 4.47534 6.68958 4.30176 5.12744L3.83618 0.9375H12.1638L11.6982 5.12744C11.5247 6.68958 10.373 7.97729 8.8324 8.33179ZM15.0625 2.12048C15.0625 3.06531 14.7374 3.99182 14.1472 4.72961C13.7047 5.28284 13.1334 5.71082 12.4825 5.97986C12.5514 5.73718 12.6014 5.48718 12.63 5.23096L13.1071 0.9375H14.5938C14.8522 0.9375 15.0625 1.14783 15.0625 1.40625V2.12048Z"
                                                    fill="black" />
                                                <path
                                                    d="M9.94081 3.20972L8.88746 3.0603L8.41835 2.13232C8.33863 1.97449 8.17677 1.875 8.00001 1.875C7.82325 1.875 7.66139 1.97449 7.58168 2.13232L7.11256 3.0603L6.05909 3.20972C5.88124 3.23499 5.73341 3.35974 5.6786 3.53088C5.62379 3.70203 5.67164 3.88953 5.80177 4.01331L6.55738 4.73242L6.37953 5.74475C6.34877 5.92004 6.41981 6.09766 6.563 6.20325C6.70655 6.30896 6.89723 6.32397 7.05519 6.24292L8.00001 5.75793L8.94471 6.24292C9.10304 6.32422 9.29371 6.30884 9.4369 6.20325C9.58021 6.09753 9.65126 5.92004 9.62049 5.74475L9.44264 4.73242L10.1981 4.01331C10.3284 3.8894 10.3762 3.70203 10.3214 3.53088C10.2666 3.35974 10.1188 3.23499 9.94081 3.20972ZM8.61439 4.22644C8.50062 4.33472 8.44862 4.49255 8.47584 4.64722L8.53395 4.97827L8.214 4.81409C8.07972 4.74512 7.9203 4.74512 7.7859 4.81409L7.46595 4.97827L7.52418 4.64722C7.55128 4.49255 7.49928 4.33472 7.38563 4.22644L7.14967 4.00195L7.48646 3.9541C7.63819 3.93262 7.76979 3.83826 7.83888 3.70154L8.00001 3.38281L8.16102 3.70142C8.23024 3.83826 8.36183 3.93262 8.51356 3.9541L8.85035 4.00183L8.61439 4.22644Z"
                                                    fill="black" />
                                            </svg><span>3 месяца</span></h3>
                                        <ul>
                                            <li class="true">7% в месяц</li>
                                            <li class="true">Капитализация: да</li>
{{--                                            <li class="true">Bonus: yes</li>--}}
                                        </ul>
                                    </button>
                                    <button data-number="6" class="card-button">


                                        <h3 class="title"><svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                                                               xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M19 6.61721C19 5.62033 18.189 4.80929 17.1921 4.80929C16.1952 4.80929 15.3843 5.62033 15.3843 6.61721C15.3843 7.09644 15.572 7.53248 15.8776 7.85632C15.3341 8.46427 14.545 8.84798 13.6674 8.84798C12.2468 8.84798 11.057 7.8437 10.7691 6.50806C11.1015 6.18002 11.3079 5.7247 11.3079 5.22198C11.3079 4.22511 10.4969 3.41406 9.5 3.41406C8.50312 3.41406 7.69208 4.22511 7.69208 5.22198C7.69208 5.7247 7.89864 6.18002 8.23089 6.50806C7.943 7.8437 6.75318 8.84798 5.33259 8.84798C4.45501 8.84798 3.66586 8.46427 3.12241 7.85632C3.42798 7.53248 3.61584 7.09644 3.61584 6.61721C3.61584 5.62033 2.8048 4.80929 1.80792 4.80929C0.811043 4.80929 0 5.62033 0 6.61721C0 7.48116 0.609261 8.20509 1.42059 8.3828C1.61295 9.97039 2.02043 11.9737 2.88235 13.3365V15.0057C2.88235 15.3147 3.13284 15.5654 3.44189 15.5654H15.5581C15.8672 15.5654 16.1176 15.3147 16.1176 15.0057V13.3365C16.9796 11.9737 17.387 9.97054 17.5794 8.3828C18.3907 8.20494 19 7.48116 19 6.61721ZM16.5034 6.61721C16.5034 6.23742 16.8123 5.92837 17.1921 5.92837C17.5719 5.92837 17.8809 6.23742 17.8809 6.61721C17.8809 6.997 17.5719 7.30591 17.1921 7.30591C16.8123 7.30591 16.5034 6.997 16.5034 6.61721ZM8.81116 5.22198C8.81116 4.84219 9.12021 4.53314 9.5 4.53314C9.87979 4.53314 10.1887 4.84219 10.1887 5.22198C10.1887 5.60178 9.87979 5.91068 9.5 5.91068C9.12021 5.91068 8.81116 5.60178 8.81116 5.22198ZM1.11908 6.61721C1.11908 6.23742 1.42813 5.92837 1.80792 5.92837C2.18771 5.92837 2.49662 6.23742 2.49662 6.61721C2.49662 6.997 2.18771 7.30591 1.80792 7.30591C1.42813 7.30591 1.11908 6.997 1.11908 6.61721ZM4.00143 14.4461V13.7296H14.9986V14.4461H4.00143ZM15.2506 12.6104H3.7495C3.16053 11.6113 2.82234 10.2078 2.62839 8.94118C3.34927 9.57929 4.29642 9.96706 5.33259 9.96706C7.1927 9.96706 8.76608 8.71708 9.25763 7.01309C9.33692 7.02382 9.41781 7.02976 9.5 7.02976C9.58219 7.02976 9.66308 7.02382 9.74237 7.01309C10.2339 8.71708 11.8073 9.96706 13.6674 9.96706C14.7039 9.96706 15.6516 9.579 16.3725 8.94032C16.1787 10.2068 15.8405 11.6102 15.2506 12.6104Z"
                                                    fill="black" />
                                            </svg><span>6 месяцев</span></h3>
                                        <ul>
                                            <li class="true">9% в месяц</li>
                                            <li class="true">Капитализация: да</li>
{{--                                            <li class="true">Bonus: yes</li>--}}
                                        </ul>
                                    </button>
{{--                                    <button data-number="4" class="card-button">--}}

{{--                                        <svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">--}}
{{--                                            <path--}}
{{--                                                d="M18.4058 5.11209L15.9035 1.41596C15.7096 1.12949 15.3808 0.958427 15.024 0.958427H3.98364C3.62737 0.958427 3.29885 1.12906 3.10484 1.4148L0.594783 5.1114C0.338279 5.48909 0.3779 5.98779 0.69114 6.32406L8.71697 14.9427C8.91562 15.156 9.20078 15.2784 9.49942 15.2784C9.49947 15.2784 9.49942 15.2784 9.49947 15.2784C9.79806 15.2784 10.0833 15.1561 10.282 14.9428L18.3087 6.32359C18.6215 5.9877 18.6614 5.48953 18.4058 5.11209ZM14.5171 1.81776L12.4126 4.93042L10.307 1.81776H14.5171ZM11.587 5.29187H7.41181L9.49942 2.2059L11.587 5.29187ZM8.69186 1.81785L6.59199 4.92195L4.49283 1.81785H8.69186ZM3.66218 2.17169L5.77216 5.29187H1.54353L3.66218 2.17169ZM1.73328 6.15124H6.25444L8.64501 13.5735L1.73328 6.15124ZM9.49942 13.3074L7.19452 6.15124H11.8043L9.49942 13.3074ZM10.3538 13.5737L12.7444 6.15129H17.266L10.3538 13.5737ZM13.2383 5.29187L15.3463 2.17384L17.4572 5.29187H13.2383Z"--}}
{{--                                                fill="black" />--}}
{{--                                        </svg>--}}


{{--                                        <h3 class="title">30 days Deposit</h3>--}}
{{--                                        <ul>--}}
{{--                                            <li class="true">1.2% Daily</li>--}}
{{--                                            <li class="true">Capitalization: yes</li>--}}
{{--                                            <li class="true">Bonus: yes</li>--}}
{{--                                        </ul>--}}
{{--                                    </button>--}}
                                </div>
                                <form class="card-input" action="{{route('deposit')}}" method="post">
                                    @csrf
                                    <h2 class="input-title">SELECT THE DEPOSIT AMOUNT:</h2>
                                    <div class="input-wrap">
                                        <input type="text" id="input" name="amount" maxlength="5" placeholder="Amount: 0.00">
                                        <div class="dollar">$</div>
                                    </div>
                                    <p class="input-subtitle">You can invest from 50$ to 20000$ per transaction</p>
                                    <input type="hidden" id="type" name="type" value="1">
                                    <p id ="checkbox2"></p>
                                    <button class="button-create">CREATE A DEPOSIT</button>
                                </form>
                            </div>
                            <div class="card--footer">
                                <p class="footer-info">
                                    the investment can be withdrawn after the end of the investment perion. The first accrual for the «7
                                    day», «14 day», «30 day» plans happens 24 hours after the deposit creation.
                                </p>
                                <div class="bonus-info-wrap">
                    <span class="bonus-info">* О Бонусе
                      <div class="info__hover">
                        При создании депозита на сумму выше 10 000$ к сумме депозита будет добавлено 2%.
                      </div>
                    </span>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <p class="pretitle">Information About Your Deposit</p>
                        <!-- deposit -->
                        <div class="widget">
                            <h3 class="widget__name">DEPOSIT SUM</h3>
                            <div class="widget__content-wrap">
                                <svg width="64" height="54" viewBox="0 0 64 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M58.6666 8.33337H45.3334V5.66663C45.3334 2.72525 42.9415 0.333252 40 0.333252H24C21.0586 0.333252 18.6666 2.72513 18.6666 5.66663V8.33325H5.33337C2.39188 8.33337 0 10.7252 0 13.6666V48.3332C0 51.2746 2.39188 53.6666 5.33337 53.6666H58.6668C61.6081 53.6666 64.0001 51.2747 64.0001 48.3332V13.6666C64 10.7252 61.6081 8.33337 58.6666 8.33337ZM21.3334 5.66663C21.3334 4.19663 22.53 3 24 3H40C41.47 3 42.6666 4.19663 42.6666 5.66663V8.33325H21.3334V5.66663ZM61.3334 48.3334C61.3334 49.8034 60.1368 51 58.6668 51H5.33337C3.86337 51 2.66675 49.8034 2.66675 48.3334V28.925C3.45438 29.3842 4.35763 29.6667 5.33337 29.6667H26.6667V33.6667C26.6667 34.4037 27.2631 35.0001 28.0001 35.0001H36.0001C36.7371 35.0001 37.3335 34.4037 37.3335 33.6667V29.6667H58.6669C59.6426 29.6667 60.546 29.3844 61.3335 28.925V48.3334H61.3334ZM29.3334 32.3334V27H34.6668V32.3334H29.3334ZM61.3334 24.3334C61.3334 25.8034 60.1368 27 58.6668 27H37.3334V25.6666C37.3334 24.9296 36.737 24.3332 36 24.3332H28C27.263 24.3332 26.6666 24.9296 26.6666 25.6666V27H5.33337C3.86337 27 2.66675 25.8034 2.66675 24.3334V13.6667C2.66675 12.1967 3.86337 11.0001 5.33337 11.0001H58.6668C60.1368 11.0001 61.3334 12.1967 61.3334 13.6667V24.3334Z"
                                        fill="#03A9F3" />
                                </svg>
                                <span id="widget__deposit" class="widget__money">0</span>
                            </div>
                        </div>
                        <!-- profit -->
                        <div class="widget">
                            <h3 class="widget__name">PROFIT</h3>
                            <div class="widget__content-wrap">
                                <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.01238 49.7C9.44988 50 11.1374 50.8375 12.5624 49.0375L22.2124 34.9375L32.4249 44.7875C32.9624 45.3 33.6999 45.575 34.4499 45.4875C35.1874 45.4125 35.8624 45.025 36.2999 44.4125L53.2374 20.125L53.8499 28.25C53.9999 30.3125 55.9374 30.65 56.5874 30.6C57.9874 30.4875 59.0499 29.275 58.9374 27.8625L57.8624 13.575C57.7624 12.175 56.5374 11.1125 55.1249 11.225L40.8374 12.3C39.4374 12.4 38.3749 13.625 38.4874 15.0375C38.5874 16.4375 39.7999 17.4875 41.2249 17.3875L49.3499 16.775L33.8249 39.025L23.5874 29.15C23.0499 28.625 22.2999 28.3625 21.5624 28.45C20.8124 28.525 20.1374 28.925 19.7124 29.55L8.34988 46.15C7.54988 47.3125 7.84988 48.9 9.01238 49.7Z"
                                        fill="#FFA500" />
                                    <path
                                        d="M59.075 56.525H5.475V2.925C5.475 1.5125 4.3375 0.375 2.925 0.375C1.5125 0.375 0.375 1.5125 0.375 2.925V59.075C0.375 60.4875 1.5125 61.625 2.925 61.625H59.075C60.4875 61.625 61.625 60.4875 61.625 59.075C61.625 57.6625 60.4875 56.525 59.075 56.525Z"
                                        fill="#FFA500" />
                                </svg>

                                <span id="widget__profit" class="widget__money">0</span>
                            </div>
                        </div>
                        <!-- final -->
                        <div class="widget">
                            <h3 class="widget__name">FINAL AMOUNT</h3>
                            <div class="widget__content-wrap">
                                <svg width="64" height="56" viewBox="0 0 64 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M6.79277 42.5705C6.30687 43.0564 5.72904 43.4504 5.11182 43.713V47.0618V52.6037C5.11182 53.9301 6.18868 54.9938 7.50192 54.9938H12.8862C14.2126 54.9938 15.2763 53.9169 15.2763 52.6037V47.0618V39.9965V34.4546C15.2763 34.3365 15.2632 34.2183 15.2501 34.1132L6.79277 42.5705Z"
                                        fill="#03A9F3" />
                                    <path
                                        d="M62.553 7.914C62.5005 7.914 62.448 7.914 62.3823 7.914C58.7578 8.08472 55.1201 8.25545 51.4955 8.42617C50.9308 8.45243 50.3793 8.4787 50.0641 9.16158C49.7489 9.83134 50.1035 10.2122 50.4975 10.6062C51.6137 11.7224 52.7169 12.8518 53.8462 13.9418L52.6118 15.1762L42.5655 25.2226L41.6725 26.1156L39.4794 28.3087L30.8382 36.9498L30.3392 36.4508L20.004 26.1156L17.8109 23.9224L17.2199 23.3315C16.7471 22.8587 16.143 22.6355 15.5258 22.6355C14.9086 22.6355 14.3045 22.8719 13.8317 23.3315L13.2408 23.9224L0.699302 36.4639C-0.233101 37.3963 -0.233101 38.9197 0.699302 39.8521L1.29026 40.4431C1.76303 40.9158 2.36712 41.1391 2.98434 41.1391C3.60157 41.1391 4.20566 40.9027 4.67843 40.4431L15.5258 29.5957L16.0248 30.0947L26.3601 40.4299L28.5532 42.623L29.1441 43.214C29.6169 43.6868 30.221 43.91 30.8382 43.91C31.4555 43.91 32.0595 43.6736 32.5323 43.214L33.1233 42.623L43.4585 32.2878L45.6516 30.0947L46.5446 29.2017L56.5909 19.1554L57.8122 17.9341L61.0953 21.1909C61.3974 21.4929 61.6994 21.8213 62.1328 21.8213C62.2904 21.8213 62.4743 21.7687 62.6712 21.6637C63.3279 21.3091 63.4723 20.7313 63.4986 20.0878C63.6562 16.542 63.8269 13.0094 63.9976 9.46363C64.037 8.3999 63.5905 7.914 62.553 7.914Z"
                                        fill="#03A9F3" />
                                    <path
                                        d="M24.9544 23.2133C25.9918 23.7123 27.095 23.975 28.2112 24.1457C29.0911 24.2901 29.1174 24.3295 29.1305 25.2357C29.1305 25.6559 29.1436 26.063 29.1436 26.4833C29.1436 27.0086 29.4063 27.3106 29.9316 27.3237C30.5488 27.3369 31.1529 27.3369 31.7701 27.3237C32.2692 27.3106 32.5318 27.0348 32.5318 26.5358C32.5318 25.9711 32.5581 25.4064 32.5318 24.8286C32.5055 24.2507 32.7551 23.9618 33.3066 23.8042C34.5805 23.4497 35.6705 22.7668 36.5109 21.7556C38.8354 18.9321 37.9424 14.7954 34.6461 12.97C33.6087 12.3922 32.5187 11.9588 31.4287 11.5123C30.7983 11.2496 30.1942 10.9476 29.6689 10.5142C28.6183 9.67375 28.8153 8.32111 30.0498 7.78268C30.3912 7.63822 30.7589 7.58569 31.1398 7.55943C32.5581 7.48063 33.9107 7.74328 35.2108 8.36051C35.8543 8.67568 36.0644 8.57062 36.2877 7.90087C36.5109 7.19172 36.7079 6.48257 36.918 5.76028C37.0625 5.28752 36.8918 4.9592 36.4321 4.76222C35.6048 4.39451 34.7512 4.13186 33.8713 4.00054C32.7025 3.81668 32.7025 3.81668 32.7025 2.6479C32.6894 0.99321 32.6894 0.99321 31.0478 0.99321C30.8115 0.99321 30.5619 0.99321 30.3256 0.99321C29.5507 1.01947 29.4194 1.1508 29.4063 1.92561C29.3931 2.28019 29.4063 2.62163 29.4063 2.97621C29.4063 4.01367 29.3931 4.00054 28.4082 4.35511C26.0181 5.22185 24.5341 6.85028 24.3766 9.46363C24.2321 11.7749 25.4403 13.3377 27.3314 14.4671C28.5001 15.1631 29.8003 15.5833 31.0347 16.1218C31.5206 16.3319 31.9802 16.5814 32.3873 16.9097C33.5824 17.8947 33.3591 19.5362 31.9408 20.1534C31.1792 20.4817 30.3912 20.5605 29.5639 20.4686C28.3032 20.311 27.0818 19.9827 25.9393 19.3786C25.2696 19.024 25.0726 19.116 24.8493 19.8514C24.6523 20.4817 24.4816 21.1121 24.3109 21.7425C24.0614 22.6092 24.1402 22.8193 24.9544 23.2133Z"
                                        fill="#03A9F3" />
                                    <path
                                        d="M26.3995 44.7768L24.2064 42.5836L19.4787 37.856C19.2686 38.2105 19.1504 38.6308 19.1504 39.0641V40.0097V51.6713V52.6168C19.1504 53.9432 20.2272 55.0069 21.5405 55.0069H26.9248C28.2512 55.0069 29.3149 53.9301 29.3149 52.6168V51.6713V46.7466C28.4482 46.4971 27.6471 46.0243 26.9905 45.3677L26.3995 44.7768Z"
                                        fill="#03A9F3" />
                                    <path
                                        d="M35.2644 44.7767L34.6734 45.3677C34.24 45.8011 33.741 46.1556 33.1895 46.4183V51.6713V52.6168C33.1895 53.9432 34.2663 55.0069 35.5796 55.0069H40.9639C42.2902 55.0069 43.354 53.93 43.354 52.6168V51.6713V40.0097V39.0641C43.354 38.4075 43.0913 37.8165 42.658 37.3832L35.2644 44.7767Z"
                                        fill="#03A9F3" />
                                    <path
                                        d="M48.6847 31.3423L47.7917 32.2353L47.2139 32.8131V34.4546V35.584V39.9965V41.1259V47.0486V52.5905C47.2139 53.9169 48.2907 54.9806 49.604 54.9806H54.9883C56.3146 54.9806 57.3784 53.9038 57.3784 52.5905V47.0486V41.1391V40.0097V35.5972V34.4678V28.5319V22.99C57.3784 22.885 57.3652 22.7799 57.3521 22.6749L48.6847 31.3423Z"
                                        fill="#03A9F3" />
                                </svg>

                                <span id="widget__final" class="widget__money">0</span>
                            </div>
                        </div>
                        <div class="widget__wrap2">
                            <div class="widget-min">
                                <h3 class="widget__name">Rate</h3>
                                <div class="widget__content-wrap">
                                    <img src="/img/discount 1.png" alt="">

                                    <span class="widget__static">5% в месяц</span>
                                </div>
                            </div>
                            <div class="widget-min ">
                  <span class="info">i
                    <div class="info__hover info__hover-long">
                      IInterest capitalization is a method of calculating interest on a Deposit, in which the Deposit
                      amount is first increased by the already accrued interest, and then the interest for the next
                      period is considered to be the interest on the received amount
                    </div>
                  </span>
                                <h3 class="widget__name">Capitalization</h3>
                                <div class="widget__content-wrap widget__content-wrap-bt">
                                    <img src="/img/man-green.png" alt="">
                                    <p class="widget__min-text" id="capitalization">Отсутствует</p>
                                </div>
                            </div>
                            <div class="widget-min">
                  <span class="info">i
                    <div class="info__hover">
                      Bonus interest is added to the earned amount after the Deposit period ends
                    </div>
                  </span>
                                <h3 class="widget__name">Bonus</h3>
                                <div class="widget__content-wrap widget__content-wrap-bt widget__bonus-wrap">
                                    <img src="/img/gift.png" alt="">
                                    <p class="widget__min-text" id="bonus">Отсутствует</p>
                                </div>
                            </div>
                            <div class="widget-min">
                                <h3 class="widget__name">Add. Information</h3>
                                <div class="widget__content-wrap-center">
                                    <img src="/img/invoice.png" alt="">
                                    <span class="widget__information">
                      We dont have
                      a Limit on the number of <b>investments</b>
                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
        <!-- футер -->
        <footer class="cabinet__footer">
            <p>Copyright © Future Technologies Company 2019</p>
        </footer>
    </div>
@endsection
@section('scripts')
    <script>

    </script>
@stop
