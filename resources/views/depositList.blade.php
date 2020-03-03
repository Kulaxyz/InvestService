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
                    <a href="{{ route('wallet') }}">Deposit Creation</a>
                </li>
            </ul>
        </div>
        <main class="cabinet__content">
            <div class="depositList">
                <div class="container-fluid ">
                    <div class="row mb-5">
                        <div class="col-lg-6 mb-5 ">
                            <p class="pretitle">Your Balance</p>
                            <div class="card">
                                <h2 class="card__title"><span id="first">First Name</span> <span id="last">last name</span></h2>
                                <div class="card-body gray">
                                    <h2 class="card-body__title">Your Available Balance <span id="money">{{ auth()->user()->balance }}&nbsp;$</span></h2>
                                    <p class="card-body__desc">
                                        Available Balance is the sum on your personal account, that is available for Widrawal or Another
                                        Deposit.
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <div class="footer__links">
                                        <a href="#" class="link-button">Deposit Funds</a>
                                        <a href="{{route('wallet')}}" class="link-button green">NEW Deposit</a>
                                        <a href="{{ route('withdrawal') }}" class="link-button">Withdraw Funds</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <p class="pretitle text-center">Information About Your Deposits</p>
                            <div class="deposit-widget__wrap">
                                <div class="widget">
                    <span class="info">i
                      <div class="info__hover info__hover-long">
                        The Total amount you have Invested with FTF
                      </div>
                    </span>
                                    <h3 class="widget__name">TOTAL DEPOSITED</h3>
                                    <div class="widget__content-wrap">
                                        <svg width="64" height="56" viewBox="0 0 64 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M60.4167 24.4233H58.8942V15.2748C58.8942 11.534 55.8491 8.50205 52.1214 8.50205H50.717L50.7301 5.10255C50.7301 2.58245 48.6825 0.534866 46.1624 0.534866H5.55209C2.5201 0.534866 0.0393765 2.97621 0 6.00821C0 6.03446 0 6.06071 0 6.08696V50.8975C0 53.4176 2.04758 55.4651 4.56768 55.4651H52.1345C55.8753 55.4651 58.9073 52.42 58.9073 48.6924V39.5308H60.4299C62.3987 39.5308 64 37.9295 64 35.9606V27.9934C63.9869 26.0246 62.3856 24.4233 60.4167 24.4233ZM5.55209 3.68499H46.1624C46.9368 3.68499 47.58 4.31501 47.58 5.08942L47.5669 8.50205H5.55209C4.22641 8.50205 3.15012 7.42576 3.15012 6.10008C3.15012 4.77441 4.22641 3.68499 5.55209 3.68499ZM55.7441 48.6793C55.7441 50.6743 54.1165 52.3019 52.1214 52.3019H4.55455C3.78015 52.3019 3.137 51.6719 3.137 50.8843V11.1009C3.87203 11.4553 4.68581 11.6522 5.55209 11.6522H52.1214C54.1165 11.6522 55.7441 13.2797 55.7441 15.2748V24.4233H44.9943C43.0254 24.4233 41.4241 26.0246 41.4241 27.9934V35.9606C41.4241 37.9295 43.0254 39.5308 44.9943 39.5308H55.7441V48.6793ZM60.8368 35.9606C60.8368 36.1969 60.653 36.3806 60.4167 36.3806H45.0074C44.7711 36.3806 44.5874 36.1969 44.5874 35.9606V27.9934C44.5874 27.7703 44.7711 27.5734 45.0074 27.5734H60.4167C60.6399 27.5734 60.8368 27.7572 60.8368 27.9934V35.9606Z"
                                                fill="#03A9F3" />
                                        </svg>

                                        <span id="widget__deposit" class="widget__money">{{ $deposited }}</span>
                                    </div>
                                </div>
                                <div class="widget">
                    <span class="info">i
                      <div class="info__hover info__hover-long">
                        Total amount of funds Withdrawn
                      </div>
                    </span>
                                    <h3 class="widget__name">TOTAL WITHDRAWN</h3>
                                    <div class="widget__content-wrap">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M37.3333 0C25.4389 0 15.392 2.76053 11.9627 6.90667C4.98027 8.61547 0.942933 11.4933 0.155733 14.4107C0.0661333 14.5675 0 14.7392 0 14.9333V15.4667V27.7333V28.2667V28.8V40.5333V41.0667V41.6V54.4C0 54.5728 0.0458667 54.736 0.1248 54.8811C1.38453 60.1024 12.6549 64 26.6667 64C38.656 64 48.6176 61.1413 52.0384 57.0475C58.8213 55.3984 63.0955 52.6997 63.8677 49.5808C63.952 49.4293 64 49.2533 64 49.0667V36.2667V35.7333V23.4667V22.9333V10.1333C64 5.22133 54.6539 0 37.3333 0ZM50.992 41.9712C50.9493 42.0768 50.8971 42.1824 50.8395 42.288C50.768 42.4192 50.688 42.5504 50.5931 42.6816C50.5227 42.7808 50.4427 42.8789 50.3595 42.9771C50.2411 43.1168 50.1152 43.2565 49.9723 43.3952C49.8859 43.4795 49.7909 43.5627 49.6949 43.6469C49.52 43.7995 49.3376 43.9509 49.1339 44.1013C49.0464 44.1664 48.9525 44.2293 48.8597 44.2933C48.6187 44.4597 48.3669 44.6251 48.0907 44.7872C48.0181 44.8309 47.9403 44.8725 47.8645 44.9152C47.5467 45.0944 47.2149 45.2725 46.8565 45.4453C46.8107 45.4677 46.7627 45.4891 46.7157 45.5104C46.3157 45.6992 45.8976 45.8848 45.4507 46.064C45.4379 46.0693 45.4251 46.0736 45.4123 46.0789C42.9899 47.0464 39.8912 47.8603 36.2805 48.3936C36.2624 48.3957 36.2443 48.3979 36.2261 48.4011C35.5243 48.5045 34.8043 48.5963 34.0651 48.6773C33.9445 48.6901 33.8176 48.6987 33.696 48.7115C33.0507 48.7787 32.3979 48.8405 31.7259 48.8896C31.4187 48.912 31.0965 48.9227 30.784 48.9419C30.2784 48.9717 29.7781 49.0048 29.2597 49.0229C28.4128 49.0496 27.5488 49.0667 26.6667 49.0667C25.7845 49.0667 24.9205 49.0496 24.0725 49.0197C23.5541 49.0016 23.0539 48.9675 22.5483 48.9387C22.2357 48.9205 21.9136 48.9088 21.6064 48.8864C20.9344 48.8373 20.2816 48.7755 19.6363 48.7083C19.5147 48.6955 19.3877 48.6869 19.2672 48.6741C18.528 48.5931 17.808 48.5003 17.1061 48.3979C17.088 48.3957 17.0699 48.3936 17.0517 48.3904C13.4411 47.8571 10.3424 47.0432 7.92 46.0757C7.9072 46.0715 7.8944 46.0661 7.8816 46.0608C7.43467 45.8816 7.01547 45.696 6.61653 45.5072C6.57067 45.4848 6.5216 45.4635 6.47573 45.4421C6.11733 45.2693 5.7856 45.0923 5.46773 44.912C5.39307 44.8693 5.31413 44.8277 5.2416 44.784C4.96533 44.6219 4.7136 44.4565 4.47253 44.2901C4.3808 44.2261 4.28587 44.1632 4.1984 44.0981C3.99467 43.9477 3.81227 43.7963 3.63733 43.6437C3.5424 43.5605 3.4464 43.4773 3.36 43.392C3.21707 43.2533 3.0912 43.1147 2.9728 42.9739C2.8896 42.8757 2.8096 42.7776 2.7392 42.6784C2.64533 42.5472 2.56533 42.416 2.4928 42.2848C2.4352 42.1792 2.384 42.0736 2.34027 41.968C2.288 41.8389 2.2464 41.7099 2.21653 41.5808C2.17707 41.4112 2.13333 41.2384 2.13333 41.0667C2.13333 40.9461 2.1472 40.8256 2.1664 40.7061C2.19307 40.5451 2.17813 40.384 2.13333 40.2315V32.3125C2.1632 32.3403 2.20053 32.3669 2.23147 32.3947C2.464 32.5995 2.7008 32.8032 2.96747 32.9995C6.9856 36.0384 15.0208 38.4 26.6667 38.4C38.2635 38.4 46.2784 36.0576 50.3136 33.0368C50.6357 32.8021 50.9259 32.56 51.1989 32.3136L51.2 32.3125V40.2315C51.1552 40.384 51.1403 40.5451 51.1669 40.7061C51.1861 40.8256 51.2 40.9461 51.2 41.0667C51.2 41.2384 51.1563 41.4112 51.1157 41.584C51.0848 41.7131 51.0443 41.8421 50.992 41.9712ZM2.7744 20.0501C3.0944 20.3019 3.44 20.5504 3.8144 20.7925C3.89227 20.8427 3.97973 20.8917 4.0608 20.9419C4.3744 21.1371 4.70613 21.328 5.05493 21.5157C5.184 21.5851 5.31307 21.6533 5.4464 21.7216C5.83573 21.92 6.24427 22.1131 6.67413 22.2997C6.74453 22.3307 6.80853 22.3627 6.88 22.3925C7.38027 22.6048 7.91147 22.8075 8.464 23.0037C8.61653 23.0581 8.77653 23.1093 8.93333 23.1627C9.3728 23.3109 9.8272 23.4528 10.2976 23.5904C10.4672 23.6395 10.6336 23.6907 10.8075 23.7376C11.4315 23.9104 12.0757 24.0747 12.752 24.2261C12.8448 24.2475 12.9451 24.2645 13.0389 24.2848C13.6352 24.4149 14.2539 24.5355 14.8896 24.6485C15.1051 24.6869 15.3237 24.7232 15.5435 24.7595C16.1483 24.8587 16.7712 24.9493 17.4101 25.0325C17.5744 25.0539 17.7312 25.0784 17.8976 25.0987C18.6912 25.1947 19.5125 25.2768 20.3563 25.3472C20.5643 25.3643 20.7808 25.3771 20.992 25.392C21.6672 25.4411 22.3573 25.4816 23.0635 25.5136C23.3205 25.5253 23.5765 25.5371 23.8389 25.5467C24.7595 25.5776 25.696 25.6 26.6667 25.6C27.6373 25.6 28.5739 25.5776 29.4933 25.5467C29.7547 25.5371 30.0107 25.5253 30.2688 25.5136C30.9749 25.4816 31.6651 25.4411 32.3403 25.392C32.5515 25.376 32.7669 25.3643 32.976 25.3472C33.8197 25.2779 34.6411 25.1947 35.4347 25.0987C35.6011 25.0784 35.7579 25.0539 35.9221 25.0325C36.5611 24.9493 37.1829 24.8587 37.7888 24.7595C38.0085 24.7232 38.2272 24.6869 38.4427 24.6485C39.0784 24.5355 39.6971 24.4149 40.2933 24.2848C40.3872 24.2645 40.4875 24.2464 40.5803 24.2261C41.2565 24.0747 41.9008 23.9093 42.5248 23.7376C42.6987 23.6896 42.8651 23.6395 43.0347 23.5904C43.5051 23.4528 43.9595 23.3109 44.3989 23.1627C44.5557 23.1093 44.7157 23.0581 44.8683 23.0037C45.4208 22.8075 45.9531 22.6048 46.4523 22.3925C46.5237 22.3627 46.5877 22.3307 46.6581 22.2997C47.088 22.112 47.4965 21.92 47.8859 21.7216C48.0192 21.6533 48.1493 21.5851 48.2773 21.5157C48.6261 21.3291 48.9579 21.1381 49.2715 20.9419C49.3525 20.8917 49.44 20.8427 49.5179 20.7925C49.8923 20.5504 50.2379 20.3029 50.5579 20.0501C50.6379 19.9861 50.7093 19.9221 50.7872 19.8581C50.9259 19.7429 51.072 19.6288 51.2 19.5125V27.4315C51.1552 27.584 51.1403 27.7451 51.1669 27.9061C51.1861 28.0256 51.2 28.1461 51.2 28.2667C51.2 28.4384 51.1563 28.6112 51.1157 28.784C51.0859 28.9131 51.0443 29.0411 50.992 29.1712C50.9493 29.2768 50.8971 29.3824 50.8395 29.488C50.768 29.6192 50.688 29.7504 50.5931 29.8816C50.5227 29.9808 50.4427 30.0789 50.3595 30.1771C50.2411 30.3168 50.1152 30.4565 49.9723 30.5952C49.8859 30.6795 49.7909 30.7627 49.6949 30.8469C49.52 30.9995 49.3376 31.1509 49.1339 31.3013C49.0464 31.3664 48.9525 31.4293 48.8597 31.4933C48.6187 31.6597 48.3669 31.8251 48.0907 31.9872C48.0181 32.0309 47.9403 32.0725 47.8645 32.1152C47.5467 32.2944 47.2149 32.4725 46.8565 32.6453C46.8107 32.6677 46.7627 32.6891 46.7157 32.7104C46.3157 32.8992 45.8976 33.0848 45.4507 33.264C45.4379 33.2693 45.4251 33.2736 45.4123 33.2789C42.9899 34.2464 39.8912 35.0603 36.2805 35.5936C36.2624 35.5957 36.2443 35.5979 36.2261 35.6011C35.5243 35.7045 34.8043 35.7963 34.0651 35.8773C33.9445 35.8901 33.8176 35.8987 33.696 35.9115C33.0507 35.9787 32.3979 36.0405 31.7259 36.0896C31.4187 36.112 31.0965 36.1227 30.784 36.1419C30.2784 36.1717 29.7781 36.2048 29.2597 36.2229C28.4128 36.2496 27.5488 36.2667 26.6667 36.2667C25.7845 36.2667 24.9205 36.2496 24.0725 36.2197C23.5541 36.2016 23.0539 36.1675 22.5483 36.1387C22.2357 36.1205 21.9136 36.1088 21.6064 36.0864C20.9344 36.0373 20.2816 35.9755 19.6363 35.9083C19.5147 35.8955 19.3877 35.8869 19.2672 35.8741C18.528 35.7931 17.808 35.7003 17.1061 35.5979C17.088 35.5957 17.0699 35.5936 17.0517 35.5904C13.4411 35.0571 10.3424 34.2432 7.92 33.2757C7.9072 33.2715 7.8944 33.2661 7.8816 33.2608C7.43467 33.0816 7.01547 32.896 6.61653 32.7072C6.57067 32.6848 6.5216 32.6635 6.47573 32.6421C6.11733 32.4693 5.7856 32.2923 5.46773 32.112C5.39307 32.0693 5.31413 32.0277 5.2416 31.984C4.96533 31.8219 4.7136 31.6565 4.47253 31.4901C4.3808 31.4261 4.28587 31.3632 4.1984 31.2981C3.99467 31.1477 3.81227 30.9963 3.63733 30.8437C3.5424 30.7605 3.4464 30.6773 3.36 30.592C3.21707 30.4533 3.0912 30.3147 2.9728 30.1739C2.8896 30.0757 2.8096 29.9776 2.7392 29.8784C2.64533 29.7472 2.56533 29.616 2.4928 29.4848C2.4352 29.3792 2.384 29.2736 2.34027 29.168C2.288 29.0389 2.2464 28.9099 2.21653 28.7808C2.17707 28.6112 2.13333 28.4384 2.13333 28.2667C2.13333 28.1461 2.1472 28.0256 2.1664 27.9061C2.19307 27.7451 2.17813 27.584 2.13333 27.4315V19.5125C2.26133 19.6288 2.40747 19.7429 2.54613 19.8581C2.62293 19.9221 2.6944 19.9861 2.7744 20.0501ZM53.3333 41.696V41.6V41.0667V40.5333V31.1168C53.3792 31.104 53.4219 31.0901 53.4677 31.0773C53.8944 30.9579 54.3104 30.8352 54.7136 30.7083C54.7179 30.7072 54.7232 30.7051 54.7275 30.704C57.8859 29.7056 60.2955 28.4651 61.8667 27.0485V35.7333C61.8667 35.8571 61.8507 35.9808 61.8293 36.1056C61.8123 36.208 61.7835 36.3104 61.7525 36.4128C61.7429 36.4427 61.7365 36.4725 61.7259 36.5035C61.6875 36.6155 61.6395 36.7275 61.584 36.8395C61.5776 36.8533 61.5701 36.8672 61.5637 36.8811C60.6805 38.6037 57.8677 40.2965 53.8091 41.552C53.6523 41.6 53.4944 41.6491 53.3333 41.696ZM61.8667 14.2368V22.9333C61.8667 23.0571 61.8507 23.1808 61.8293 23.3056C61.8123 23.408 61.7835 23.5104 61.7525 23.6128C61.7429 23.6427 61.7365 23.6725 61.7259 23.7035C61.6875 23.8155 61.6395 23.9275 61.584 24.0395C61.5776 24.0533 61.5701 24.0672 61.5637 24.0811C60.6805 25.8037 57.8677 27.4965 53.8091 28.752C53.6523 28.8 53.4944 28.8491 53.3333 28.896V28.8V28.2667V27.7333V18.3168C53.4229 18.2923 53.5051 18.2645 53.5936 18.24C53.8389 18.1707 54.0779 18.0981 54.3157 18.0267C54.5173 17.9659 54.7189 17.904 54.9141 17.8411C55.1573 17.7621 55.392 17.6811 55.6256 17.5989C55.8027 17.5371 55.9819 17.4763 56.1536 17.4133C56.4 17.3227 56.6357 17.2277 56.8715 17.1339C57.0176 17.0752 57.1691 17.0187 57.3109 16.9589C57.584 16.8437 57.8443 16.7253 58.1024 16.6048C58.1952 16.5621 58.2933 16.5205 58.3829 16.4779C58.7285 16.3115 59.0603 16.1408 59.376 15.9669C59.4091 15.9488 59.4368 15.9296 59.4699 15.9115C59.7483 15.7557 60.0171 15.5968 60.2709 15.4347C60.3605 15.3771 60.4405 15.3184 60.5269 15.2608C60.7147 15.136 60.9003 15.0101 61.0731 14.8811C61.168 14.8107 61.2533 14.7381 61.3429 14.6667C61.4933 14.5472 61.6437 14.4277 61.7813 14.3061C61.8091 14.2816 61.8411 14.2603 61.8667 14.2368ZM37.3333 2.13333C51.792 2.13333 61.8667 6.3488 61.8667 10.1333C61.8667 10.2752 61.8517 10.4171 61.824 10.5589C61.8155 10.6059 61.7973 10.6517 61.7856 10.6987C61.7611 10.7947 61.7376 10.8896 61.7013 10.9856C61.68 11.0411 61.6512 11.0965 61.6267 11.152C61.5872 11.2384 61.5488 11.3248 61.4997 11.4112C61.4667 11.4699 61.4272 11.5285 61.3899 11.5872C61.3365 11.6704 61.2832 11.7536 61.2224 11.8357C61.1776 11.8955 61.1275 11.9552 61.0784 12.0139C61.0112 12.0949 60.9429 12.176 60.8683 12.256C60.8128 12.3157 60.7531 12.3755 60.6933 12.4352C60.6133 12.5141 60.5301 12.5941 60.4416 12.6731C60.3755 12.7317 60.3072 12.7915 60.2368 12.8501C60.1429 12.928 60.0448 13.0059 59.9435 13.0837C59.8677 13.1413 59.7909 13.2 59.7109 13.2576C59.6032 13.3355 59.4891 13.4123 59.3739 13.4891C59.2896 13.5456 59.2053 13.6011 59.1168 13.6576C58.9931 13.7355 58.864 13.8123 58.7328 13.888C58.6421 13.9413 58.5525 13.9947 58.4576 14.0469C58.3168 14.1248 58.1675 14.2027 58.0181 14.2805C57.9232 14.3296 57.8315 14.3797 57.7333 14.4277C57.5701 14.5088 57.3973 14.5877 57.2256 14.6677C57.1317 14.7104 57.0432 14.7541 56.9472 14.7968C56.72 14.8971 56.4843 14.9963 56.2443 15.0933C56.1963 15.1125 56.1525 15.1328 56.1045 15.152C55.8123 15.2683 55.5093 15.3824 55.1979 15.4944C55.1115 15.5253 55.0187 15.5552 54.9312 15.5851C54.7029 15.664 54.4747 15.7429 54.2368 15.8197C54.1131 15.8603 53.9829 15.8976 53.856 15.9371C53.6843 15.9904 53.5125 16.0427 53.3365 16.0939V15.4667V14.9333C53.3365 14.8128 53.3077 14.6987 53.2672 14.5899C53.2523 14.5472 53.2384 14.5067 53.2181 14.4672C53.216 14.4629 53.2149 14.4565 53.2117 14.4523C52.9088 13.1968 52.0149 12.0213 50.656 10.9547C50.6485 10.9483 50.6421 10.9419 50.6336 10.9365C50.4395 10.784 50.2229 10.6379 50.0096 10.4907C46.2261 7.81227 39.2629 5.71307 29.3856 5.3856C28.4907 5.35253 27.5851 5.33333 26.6667 5.33333C25.7557 5.33333 24.8501 5.35147 23.952 5.38453C21.2875 5.47307 18.8459 5.69493 16.6091 6.01813C20.7413 3.8528 28.0245 2.13333 37.3333 2.13333ZM14.3925 8.5984C14.6613 8.54507 14.9387 8.49813 15.2128 8.448C15.5669 8.38293 15.9232 8.32 16.2891 8.26133C16.608 8.21013 16.9301 8.16213 17.2544 8.1152C17.6139 8.064 17.9808 8.016 18.3509 7.97013C18.6645 7.93067 18.9771 7.89013 19.2949 7.856C19.9339 7.78667 20.5845 7.72587 21.2501 7.67467C21.5029 7.6544 21.76 7.6416 22.0149 7.62453C22.5312 7.5904 23.0517 7.56053 23.5829 7.53813C23.8336 7.52747 24.0843 7.5168 24.3371 7.50827C25.1029 7.4848 25.8752 7.46667 26.6667 7.46667C27.5488 7.46667 28.4128 7.48373 29.2619 7.5136C29.7739 7.53173 30.2677 7.5648 30.7669 7.5936C31.0869 7.61173 31.4144 7.62453 31.7291 7.64693C32.3915 7.69493 33.0347 7.7568 33.6715 7.82187C33.8027 7.83467 33.9403 7.84427 34.0704 7.8592C34.7925 7.93813 35.4955 8.0288 36.1824 8.12907C36.2176 8.1344 36.2549 8.13867 36.2891 8.14293C39.8827 8.67413 42.9675 9.48267 45.3835 10.4437C45.4101 10.4544 45.4389 10.4651 45.4656 10.4757C45.8987 10.6496 46.304 10.8299 46.6912 11.0123C46.7509 11.04 46.8128 11.0677 46.8715 11.0955C47.2181 11.2629 47.5381 11.4347 47.8464 11.6075C47.9317 11.6555 48.0213 11.7035 48.1035 11.7525C48.3691 11.9093 48.6123 12.0683 48.8459 12.2293C48.9472 12.2987 49.0496 12.3691 49.1445 12.4395C49.3408 12.5845 49.5168 12.7307 49.6853 12.8779C49.7867 12.9664 49.888 13.0549 49.9797 13.1445C50.1173 13.2789 50.24 13.4133 50.3541 13.5488C50.4405 13.6512 50.5248 13.7536 50.5973 13.8571C50.6891 13.984 50.7669 14.112 50.8373 14.24C50.8971 14.3488 50.9493 14.4565 50.9931 14.5643C51.0443 14.6912 51.0848 14.8192 51.1147 14.9461C51.1563 15.1211 51.2 15.2939 51.2 15.4667C51.2 19.2512 41.1253 23.4667 26.6667 23.4667C12.208 23.4667 2.13333 19.2512 2.13333 15.4667C2.13333 12.8853 6.8256 10.1067 14.3925 8.5984ZM26.6667 61.8667C12.7616 61.8667 2.77227 57.9168 2.16747 54.2272C2.15893 54.1792 2.14827 54.1323 2.13333 54.0875V45.1125C2.1632 45.1403 2.20053 45.1669 2.23147 45.1947C2.464 45.3995 2.7008 45.6032 2.96747 45.7995C6.9856 48.8384 15.0208 51.2 26.6667 51.2C38.2635 51.2 46.2784 48.8576 50.3136 45.8368C50.6357 45.6021 50.9259 45.36 51.1989 45.1136L51.2 45.1125V54.0832C51.1851 54.1301 51.1744 54.1781 51.1659 54.2272C51.1307 54.4448 51.056 54.6635 50.9568 54.8811C50.9184 54.9653 50.8587 55.0496 50.8107 55.1339C48.8811 58.5355 39.4357 61.8667 26.6667 61.8667ZM61.8325 48.8939C61.4944 50.9643 58.2976 53.0443 53.3291 54.4992C53.3323 54.4672 53.3333 54.4331 53.3333 54.4V43.9168C53.3792 43.904 53.4219 43.8901 53.4677 43.8773C53.8944 43.7579 54.3104 43.6352 54.7136 43.5083C54.7179 43.5072 54.7232 43.5051 54.7275 43.504C57.8859 42.5056 60.2955 41.2651 61.8667 39.8485V48.7509C61.8517 48.7968 61.8411 48.8448 61.8325 48.8939Z"
                                                fill="#9675CE" />
                                        </svg>
                                        <span id="widget__deposit" class="widget__money">{{ $withdrawn }}</span>
                                    </div>
                                </div>
                                <div class="widget">
                    <span class="info">i
                      <div class="info__hover info__hover-long">
                        Total amount of all active deposits
                      </div>
                    </span>
                                    <h3 class="widget__name">ACTIVE DEPOSITS</h3>
                                    <div class="widget__content-wrap">
                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M9.01238 49.7C9.44988 50 11.1374 50.8375 12.5624 49.0375L22.2124 34.9375L32.4249 44.7875C32.9624 45.3 33.6999 45.575 34.4499 45.4875C35.1874 45.4125 35.8624 45.025 36.2999 44.4125L53.2374 20.125L53.8499 28.25C53.9999 30.3125 55.9374 30.65 56.5874 30.6C57.9874 30.4875 59.0499 29.275 58.9374 27.8625L57.8624 13.575C57.7624 12.175 56.5374 11.1125 55.1249 11.225L40.8374 12.3C39.4374 12.4 38.3749 13.625 38.4874 15.0375C38.5874 16.4375 39.7999 17.4875 41.2249 17.3875L49.3499 16.775L33.8249 39.025L23.5874 29.15C23.0499 28.625 22.2999 28.3625 21.5624 28.45C20.8124 28.525 20.1374 28.925 19.7124 29.55L8.34988 46.15C7.54988 47.3125 7.84988 48.9 9.01238 49.7Z"
                                                fill="#FFA500" />
                                            <path
                                                d="M59.075 56.525H5.475V2.925C5.475 1.5125 4.3375 0.375 2.925 0.375C1.5125 0.375 0.375 1.5125 0.375 2.925V59.075C0.375 60.4875 1.5125 61.625 2.925 61.625H59.075C60.4875 61.625 61.625 60.4875 61.625 59.075C61.625 57.6625 60.4875 56.525 59.075 56.525Z"
                                                fill="#FFA500" />
                                        </svg>
                                        <span id="widget__deposit" class="widget__money">{{ $active }}</span>
                                    </div>
                                </div>
                                <div class="widget">
                    <span class="info">i
                      <div class="info__hover info__hover-long">
                        Total amount of funds earned with a referral program
                      </div>
                    </span>
                                    <h3 class="widget__name">AFFILIATE EARNINGS</h3>
                                    <div class="widget__content-wrap">
                                        <svg width="64" height="60" viewBox="0 0 64 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M63.0625 50.7374C62.5446 50.7374 62.125 51.1572 62.125 51.6749V57.939C62.125 58.026 62.0543 58.0969 61.9671 58.0969H58.4049V44.3998C58.4049 43.882 57.9853 43.4623 57.4674 43.4623C56.9495 43.4623 56.5299 43.882 56.5299 44.3998V58.097H49.6462L51.5093 56.0474C51.797 55.7308 51.9327 55.2811 51.8723 54.8445C51.8709 54.8351 51.8695 54.8259 51.8679 54.8165L49.7735 42.442L50.1589 41.8619L50.2593 41.9332C50.6029 42.1773 51.0411 42.2663 51.4651 42.1604C51.8815 42.0563 52.2304 41.7762 52.4221 41.3922V41.392L54.5533 37.1207L59.4214 39.0061C59.6135 39.0896 62.1245 40.2409 62.1245 43.2367V47.2997C62.1246 47.8175 62.5443 48.2373 63.0621 48.2373C63.58 48.2373 63.9996 47.8175 63.9996 47.2998V43.2368C63.9996 38.9105 60.289 37.3354 60.1311 37.2704C60.1251 37.2679 60.1193 37.2656 60.1133 37.2633L51.8237 34.0528V32.3453C53.1176 31.3043 54.0264 29.8039 54.2993 28.0936C54.9446 28.0126 55.5434 27.7542 56.0403 27.3268C56.7528 26.7141 57.1616 25.8224 57.1616 24.8808C57.1616 24.1292 56.9008 23.41 56.4336 22.8387V20.309C56.4336 15.3582 52.4059 11.3306 47.4554 11.3306C45.2328 11.3306 43.1978 12.1441 41.6282 13.4868C41.6079 12.7685 41.3508 12.084 40.9027 11.536V9.00636C40.9027 4.05562 36.8749 0.0279999 31.9244 0.0279999C26.9737 0.0279999 22.9461 4.05574 22.9461 9.00636V11.602C22.4955 12.1405 22.2433 12.7897 22.2211 13.4788C21.2196 12.623 20.021 11.9786 18.6851 11.6269C18.1836 11.4949 17.6715 11.794 17.5396 12.2947C17.4077 12.7955 17.7067 13.3083 18.2075 13.4402C21.3216 14.2602 23.4966 17.0848 23.4966 20.3088V21.711C23.4561 21.7026 23.3261 21.6802 23.3211 21.6795C23.3083 21.4148 23.2413 21.2532 23.0971 21.0457C22.8571 20.7008 22.4261 20.2712 21.0398 18.7812C20.5458 18.2506 19.7468 18.1532 19.1403 18.5497C16.766 20.1007 13.8813 20.8912 11.2044 20.7341C10.3324 20.683 9.78773 21.0661 9.55561 21.694C9.53486 21.6973 9.30298 21.7441 9.29011 21.7472V20.3088C9.29011 17.2002 11.3674 14.4036 14.3415 13.5077C14.8372 13.3585 15.1181 12.8355 14.9688 12.3396C14.8195 11.8437 14.2957 11.5629 13.8006 11.7124C11.9919 12.2571 10.366 13.3913 9.22286 14.9058C8.03998 16.4726 7.41486 18.341 7.41486 20.309V22.9047C6.94261 23.469 6.68724 24.1547 6.68724 24.8808C6.68724 26.4858 7.86973 27.8856 9.55448 28.0943C9.83048 29.7647 10.7367 31.3666 12.167 32.4557V34.0533L3.88662 37.2636C3.88074 37.2658 3.87487 37.2682 3.86899 37.2706C3.71074 37.3354 0 38.9104 0 43.2367V57.939C0 59.0601 0.911998 59.972 2.03312 59.972H30.9044C31.3079 59.972 31.6833 59.8524 32.0001 59.6489C32.3166 59.8524 32.6921 59.972 33.0957 59.972H61.9671C63.0881 59.972 64.0001 59.0601 64.0001 57.939V51.6749C64 51.1572 63.5804 50.7374 63.0625 50.7374ZM9.46273 26.1572C8.91311 25.9577 8.56198 25.4493 8.56198 24.8806C8.56198 24.329 8.96198 23.8757 9.46273 23.6606V26.1572ZM52.7973 36.4406L50.957 40.1288C50.9568 40.1285 48.9129 38.6769 48.8839 38.6563C49.7657 37.5678 49.3514 38.0792 51.1849 35.8162L52.7973 36.4406ZM47.5287 37.3503L45.104 34.3574V33.4581C45.8922 33.7306 46.7412 33.8563 47.5403 33.8566C47.5404 33.8566 47.5407 33.8566 47.5408 33.8566H47.5409C48.3672 33.8564 49.2037 33.6996 49.9487 33.4192V34.3632L47.5287 37.3503ZM48.6294 40.7757L48.2845 41.2948H46.7732L46.4283 40.7757L47.5289 39.994L48.6294 40.7757ZM31.9976 26.0476L29.5729 23.0547V22.1553C30.3579 22.4267 31.2061 22.5536 32.0092 22.5538C32.0093 22.5538 32.0096 22.5538 32.0097 22.5538H32.0098C32.8346 22.5538 33.6709 22.3975 34.4176 22.1166V23.0605L31.9976 26.0476ZM33.0982 29.4732L32.7533 29.9923H31.2419L30.8971 29.4732L31.9977 28.6916L33.0982 29.4732ZM24.6147 16.7017C24.768 16.7435 24.9255 16.7718 25.0853 16.7916C25.3613 18.462 26.2676 20.0638 27.6978 21.153V22.7506L25.7852 23.492C25.6743 23.2591 25.5357 23.0397 25.3712 22.8386V20.309C25.3712 19.0367 25.1032 17.8137 24.6147 16.7017ZM36.9794 15.709C36.9794 18.4531 34.7409 20.6785 32.0098 20.6785C28.9284 20.6785 26.8692 18.2903 26.8692 15.709V11.3175C29.8296 11.436 32.9049 10.5586 35.4193 8.99361C36.2647 9.90011 36.7677 10.4267 36.9796 10.6712C36.9794 13.0054 36.9794 13.9066 36.9794 15.709ZM38.7683 16.791C38.9273 16.771 39.084 16.7425 39.2364 16.7008C38.7494 17.8058 38.4769 19.0258 38.4769 20.309V22.9046C38.3328 23.0767 38.2088 23.2601 38.1062 23.4525L36.2927 22.7502V21.0427C37.5866 20.0016 38.4954 18.5012 38.7683 16.791ZM28.3381 24.515L30.6396 27.3557L29.0701 28.4704C29.0692 28.4711 29.0686 28.4717 29.0677 28.4723L28.5696 28.8262L26.7292 25.1381L28.3381 24.515ZM34.1553 26.3629L35.6537 24.5135L37.2661 25.1378L35.4259 28.8262L34.9267 28.4717C34.9262 28.4713 34.9257 28.4708 34.9252 28.4704L33.3528 27.3536L34.1553 26.3629ZM34.6278 30.5593L34.7282 30.6306C35.0787 30.8796 35.5186 30.9618 35.9341 30.8578C36.3504 30.7537 36.6993 30.4736 36.8911 30.0896V30.0894L38.4733 26.9183C39.0169 27.5883 39.8032 27.9958 40.6129 28.0969C40.8989 29.8894 41.8678 31.4192 43.229 32.4557V34.0532L35.2586 37.1433L34.2423 31.1396L34.6278 30.5593ZM43.8692 35.8176L46.1707 38.6583C45.1644 39.3732 44.1528 40.0918 44.1007 40.1288L42.2603 36.4407L43.8692 35.8176ZM52.5104 27.0117C52.5107 29.6888 50.3365 31.9812 47.5409 31.9812C44.3544 31.9812 42.4003 29.4854 42.4003 27.0117V22.6202C45.3395 22.7376 48.4189 21.8718 50.9503 20.2963C51.7957 21.2028 52.2986 21.7295 52.5105 21.974C52.5104 24.308 52.5104 25.2093 52.5104 27.0117ZM55.2866 24.8807C55.2866 25.4505 54.9344 25.9578 54.3859 26.1572V23.6068C54.9529 23.8133 55.2866 24.3315 55.2866 24.8807ZM40.352 20.3088C40.352 16.3921 43.5387 13.2056 47.4553 13.2056C51.372 13.2056 54.5584 16.3922 54.5584 20.3088V21.711C54.5158 21.7021 54.3985 21.6818 54.3829 21.6795C54.3701 21.4146 54.3028 21.2526 54.1589 21.0457C53.9125 20.6918 53.4863 20.2696 52.1017 18.7812C51.6182 18.2622 50.8209 18.1453 50.2022 18.5497C47.8922 20.0587 44.9737 20.9111 42.1965 20.7307C41.4164 20.6796 40.8513 21.0616 40.6174 21.6941C40.5965 21.6975 40.365 21.7442 40.3519 21.7473V20.3088H40.352ZM40.5252 23.6607V26.1559C39.9739 25.9572 39.6244 25.4475 39.6244 24.8806C39.6243 24.329 40.024 23.876 40.5252 23.6607ZM39.7553 13.5781C39.7553 13.9728 39.5844 14.3462 39.2865 14.6023C39.1587 14.7123 39.0129 14.7968 38.8546 14.8545V12.3041C39.4152 12.5076 39.7553 13.023 39.7553 13.5781ZM31.9241 1.903C35.8408 1.903 39.0273 5.08949 39.0273 9.00623V10.4084C38.9849 10.3996 38.8674 10.3792 38.8518 10.3769C38.8379 10.0897 38.7552 9.91323 38.5863 9.68486C38.3353 9.34511 37.8726 8.87798 36.5706 7.47849C36.0789 6.95061 35.2804 6.84874 34.6711 7.24699C32.2316 8.84073 29.2722 9.61636 26.5898 9.42423C25.9336 9.37461 25.3157 9.77111 25.0865 10.3912C25.0656 10.3946 24.834 10.4414 24.821 10.4445V9.00636H24.8208C24.8208 5.08949 28.0074 1.903 31.9241 1.903ZM24.9938 12.358V14.8546C24.4442 14.6551 24.0931 14.1467 24.0931 13.578C24.0931 13.0295 24.49 12.5746 24.9938 12.358ZM23.3233 23.6068C23.8478 23.7977 24.1847 24.2553 24.2181 24.7992C24.2601 25.4039 23.8885 25.9508 23.3233 26.1561V23.6068ZM23.2365 28.0967C24.1207 27.9861 24.9323 27.5201 25.4646 26.8032L27.1043 30.0894C27.1043 30.0894 27.1043 30.0894 27.1044 30.0896C27.2961 30.4737 27.6449 30.7537 28.0613 30.8578C28.4729 30.9607 28.9133 30.8819 29.2672 30.6306L29.3676 30.5593L29.7529 31.1394L28.7371 37.1416L20.7616 34.0527V32.3459H20.7615C22.0893 31.2753 22.97 29.7626 23.2365 28.0967ZM16.4662 37.3503L14.0416 34.3574V33.4581C14.8266 33.7294 15.6748 33.8563 16.478 33.8564C16.4781 33.8564 16.4783 33.8564 16.4785 33.8564C17.3167 33.8564 18.1517 33.6954 18.8862 33.4192V34.3632L16.4662 37.3503ZM17.567 40.7757L17.2221 41.2948H15.7107L15.3658 40.7757L16.4665 39.994L17.567 40.7757ZM20.1223 35.8162L21.7348 36.4407L19.8946 40.1288L19.3953 39.7743C19.3948 39.7739 19.3943 39.7734 19.3938 39.773L17.8215 38.6563L20.1223 35.8162ZM11.3379 27.0117V22.6202C14.314 22.7391 17.3913 21.8501 19.8878 20.2963C20.7252 21.1943 21.236 21.7292 21.4481 21.974C21.4481 24.3081 21.4481 25.2094 21.4481 27.0117C21.4481 29.7383 19.225 31.9812 16.4785 31.9812C13.4206 31.9812 11.3379 29.6203 11.3379 27.0117ZM12.8069 35.8176L15.1083 38.6583L13.5388 39.773C13.538 39.7737 13.5373 39.7743 13.5365 39.7749L13.0384 40.1288L11.198 36.4407L12.8069 35.8176ZM7.47036 58.0971V44.3998C7.47036 43.882 7.05074 43.4623 6.53286 43.4623C6.01499 43.4623 5.59536 43.882 5.59536 44.3998V58.097H2.03312C1.94587 58.097 1.87512 58.0261 1.87512 57.9391V43.2367C1.87512 40.2255 4.41224 39.0778 4.57649 39.0068L9.44161 37.1207L11.573 41.392C11.573 41.392 11.573 41.392 11.5731 41.3922C11.7647 41.7763 12.1136 42.0563 12.5301 42.1604C12.9417 42.2633 13.3821 42.1845 13.736 41.9332L13.8363 41.8619L14.2217 42.442L12.1274 54.8165C12.1257 54.8258 12.1244 54.8351 12.123 54.8445C12.0627 55.2809 12.1984 55.7305 12.4862 56.0476L14.3491 58.097H7.47036V58.0971ZM14.0091 54.935L16.0002 43.1699H16.9326L18.9238 54.935L16.4665 57.6384L14.0091 54.935ZM31.0623 57.939C31.0623 58.0261 30.9916 58.097 30.9044 58.097H27.3424V44.3998C27.3424 43.882 26.9228 43.4623 26.405 43.4623C25.8871 43.4623 25.4675 43.882 25.4675 44.3998V58.097H18.5837L20.4468 56.0474C20.7346 55.7308 20.8702 55.2811 20.8098 54.8445C20.8085 54.8351 20.8071 54.8259 20.8055 54.8165L18.7111 42.442L19.0965 41.8619L19.1968 41.9332C19.4477 42.1114 19.7447 42.2044 20.0461 42.2044C20.596 42.2044 21.1081 41.8963 21.3598 41.3922V41.392L23.491 37.1208L28.3591 39.0062C29.7781 39.6234 31.0622 41.2153 31.0622 43.2367V57.939H31.0623ZM31.9999 39.8299C31.6116 39.2042 31.0946 38.6252 30.4713 38.1311L31.5314 31.8674H32.4638L33.5244 38.1343C32.8846 38.6424 32.3743 39.2267 31.9999 39.8299ZM38.5327 58.0971V44.3998C38.5327 43.882 38.1131 43.4623 37.5952 43.4623C37.0773 43.4623 36.6577 43.882 36.6577 44.3998V58.097H33.0956C33.0084 58.097 32.9376 58.0261 32.9376 57.9391V43.2367C32.9376 42.1222 33.2871 41.0957 34.0316 40.2333C34.5279 39.6639 35.1863 39.2029 35.6391 39.0068L40.5042 37.1206L42.6355 41.392C42.6355 41.392 42.6355 41.392 42.6357 41.3922C42.8273 41.7763 43.1762 42.0563 43.5925 42.1604C44.0042 42.2633 44.4445 42.1845 44.7984 41.9332L44.8988 41.8619L45.2842 42.442L43.1898 54.8165C43.1882 54.8258 43.1868 54.8351 43.1854 54.8445C43.1252 55.2809 43.2608 55.7305 43.5487 56.0476L45.4115 58.097H38.5327V58.0971ZM45.0714 54.9351L47.0627 43.17H47.995L49.9863 54.9351L47.5288 57.6385L45.0714 54.9351Z"
                                                fill="#00C292" />
                                        </svg>
                                        <span id="widget__deposit" class="widget__money">{{ auth()->user()->ref_bonus }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <p class="pretitle">LIST OF ACTIVE AND CLOSED DEPOSITS</p>
                    <div class="row">
                        <div class="col">
                            <div class="card-table-wrap">
                                <div class="card card-table">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="text-center">Даты Депозита</th>
                                            <th scope="col" class="text-center">Инвестировано, %</th>
                                            <th scope="col" class="text-center">Заработано</th>
                                            <th scope="col" class="text-center">Статус</th>
                                            <th scope="col" class="text-center">Пополнить</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php
                                            $statusClasses = [
                                                ['symb-waiting', trans('custom.waiting')],
                                                ['symb-process', trans('custom.processing')],
                                                ['symb-rejected', trans('custom.rejected')],
                                                ['symb-success', trans('custom.success')],
                                            ];
                                        @endphp
                                        @foreach($deposits as $deposit)
                                            <tr>
                                                <td scope="row" class="table-secondary text-center">
                                                    @isset($deposit->starts_at)
                                                        @isset($deposit->finish_at)
                                                            {{$deposit->starts_at->format('Y.m.d')}} - {{ $deposit->finish_at->format('Y.m.d') }}
                                                        @endif
                                                        @else
                                                        Станут известны после подтверждения!
                                                    @endif
                                                </td>
                                                <td class="table-secondary text-center">{{$deposit->start_amount}}$, {{$deposit->profit}}%</td>
                                                <td class="table-secondary text-center">{{$deposit->start_amount}}$
                                                    @if($deposit->earned_amount >0) + {{$deposit->earned_amount}}$
                                                    @elseif($deposit->amount > $deposit->start_amount) +
                                                        {{$deposit->amount - $deposit->start_amount}}$
                                                    @endif</td>
{{--                                                <td class="table-secondary text-center">-</td>--}}
                                                <td class="table-secondary text-center">
                                                    <span class="{{$statusClasses[$deposit->status][0]}}">
                                                        {{ $statusClasses[$deposit->status][1] }}
                                                    </span>
                                                </td>
                                                <td class="table-secondary text-center">
                                                    @if($deposit->refillable)
                                                        <button class="request__card-btn"
                                                                onclick="$('#refill').modal();
                                                                        $('#deposit_num').val('{{$deposit->id}}')">
                                                            {{ trans('custom.refill_btn') }}
                                                        </button>
                                                    @else
                                                        {{ $deposit->refill_time }}
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
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

@stop
@section('modal')
    <div class="modal modal-withdrawal fade" id="refill" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h2>{{ trans('custom.refill') }}</h2>
                    <div class="card">
                        <div class="card-body">
                            <form id="refill_form" class="card-input" method="post">
                                @csrf
                                <div class="input-wrap" style="max-width: 100% !important; margin-bottom: 20px;">
                                    <input type="number" id="input" name="amount" maxlength="5" placeholder="{{trans('custom.amount')}}: 0.00">
                                    <div class="dollar">$</div>
                                </div>
                                <input type="hidden" name="deposit_num" id="deposit_num" value ="1">
                                <button class="button-create">{{ trans('custom.submit') }}</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center align-items-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ trans('custom.close') }}</button>
                </div>
            </div>
        </div>
    </div>
@stop