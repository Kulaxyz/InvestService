<!DOCTYPE html>
<html lang="eng">


@component('components.head')
@endcomponent

<body class="mainPage">

<div class="page-preloader">
    <div class="loader"></div>
</div>
<!-- header -->
@component('components.header')
@endcomponent
<!-- main -->
<main class="main main-main">
    <!-- Стартапы и технологии -->
    <section class="startaps" id="startaps">
        <div class="container">
            <h2 class="title wow zoomIn">СТАРТАПЫ И ТЕХНОЛОГИИ
            </h2>
            <p class="subtitle">НА ЧЕМ МЫ БОЛЬШЕ ВСЕГО ЗАРАБАТЫВАЕМ:
            </p>
        </div>
        <div class="startaps__bg">
            <div class="startaps__tabs">
                <div class="startaps__tab startaps__tab-active">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.1392 32.8256C5.6976 32.8256 5.3392 32.4944 5.3392 32.0544V32C5.3392 29.2048 5.7696 26.4512 6.6192 23.816C6.7552 23.3952 7.2064 23.168 7.6256 23.2992C8.0464 23.4352 8.2768 23.8864 8.1424 24.3056C7.344 26.7824 6.9392 29.3712 6.9392 32C6.9392 32.44 6.5824 32.8256 6.1392 32.8256ZM39.7664 55.8336C37.2736 56.6432 34.6704 57.0576 32.0288 57.0608C31.5872 57.0608 31.2288 57.4224 31.2288 57.8608C31.2288 58.2992 31.5872 58.6608 32.0288 58.6608C34.8384 58.6576 37.6112 58.2192 40.2624 57.3568C40.6832 57.2224 40.9104 56.7696 40.7728 56.3488C40.6368 55.9296 40.184 55.6976 39.7664 55.8336ZM8.1728 39.7888C8.0368 39.368 7.5904 39.1392 7.1648 39.2768C6.7456 39.4128 6.5152 39.8656 6.6528 40.2848C7.52 42.9408 8.7984 45.4384 10.4544 47.7072C10.6112 47.9232 10.8544 48.0352 11.1008 48.0352C11.264 48.0352 11.4304 47.9872 11.5712 47.88C11.928 47.6192 12.0064 47.1184 11.7456 46.7632C10.192 44.632 8.9888 42.2848 8.1728 39.7888ZM39.6704 8.1344C42.1712 8.9376 44.5232 10.128 46.6624 11.6736C46.8048 11.776 46.968 11.8256 47.1296 11.8256C47.3776 11.8256 47.6224 11.7104 47.7776 11.4944C48.0368 11.136 47.9552 10.6352 47.6 10.3776C45.3248 8.7328 42.8224 7.4656 40.16 6.6112C39.7392 6.4784 39.2912 6.7088 39.1536 7.128C39.0192 7.5488 39.2496 8 39.6704 8.1344ZM11.04 17.648C11.288 17.648 11.5328 17.5328 11.688 17.3168C13.232 15.184 15.0912 13.3152 17.2176 11.76C17.5744 11.4992 17.6512 10.9984 17.3904 10.6416C17.1312 10.2848 16.6304 10.208 16.272 10.4688C14.0112 12.1216 12.0336 14.1104 10.392 16.3776C10.1328 16.736 10.2128 17.2352 10.5712 17.4944C10.7136 17.6 10.8784 17.648 11.04 17.648ZM23.9392 8.2208C24.0208 8.2208 24.1056 8.208 24.1888 8.1808C26.6784 7.3648 29.2816 6.9472 31.9248 6.9408C32.3648 6.9392 32.7248 6.5808 32.7232 6.1392C32.7216 5.6992 32.3616 5.3408 31.9232 5.3408H31.9216C29.1104 5.3488 26.3408 5.7936 23.6912 6.6608C23.272 6.7984 23.0432 7.2496 23.1808 7.6704C23.2896 8.0064 23.6016 8.2208 23.9392 8.2208ZM24.2816 55.8496C21.7824 55.04 19.432 53.8464 17.296 52.296C16.9392 52.0336 16.4368 52.1168 16.1792 52.4704C15.92 52.832 16 53.3312 16.3568 53.5904C18.6288 55.2368 21.1296 56.5088 23.7888 57.368C23.8704 57.3968 23.9536 57.4048 24.0352 57.4048C24.3728 57.4048 24.6864 57.1888 24.7968 56.8512C24.9328 56.4368 24.7024 55.9856 24.2816 55.8496ZM52.2816 46.7232C50.7328 48.8512 48.8688 50.7168 46.7408 52.2672C46.384 52.528 46.3072 53.0288 46.5664 53.3856C46.7248 53.6 46.9664 53.7152 47.2128 53.7152C47.376 53.7152 47.5408 53.6656 47.6832 53.5616C49.9472 51.912 51.928 49.928 53.576 47.6608C53.8384 47.3008 53.7568 46.8032 53.4032 46.544C53.04 46.2848 52.5408 46.3664 52.2816 46.7232ZM57.8608 31.1488C57.4192 31.1488 57.0608 31.5568 57.0608 32C57.0608 34.6432 56.6512 37.2496 55.84 39.7424C55.7056 40.1632 55.936 40.6128 56.3552 40.7504C56.4368 40.7792 56.52 40.7888 56.5984 40.7888C56.936 40.7888 57.2496 40.5744 57.3616 40.2336C58.224 37.584 58.6608 34.8096 58.6608 32V31.8976C58.6608 31.456 58.3024 31.1488 57.8608 31.1488ZM55.8112 24.1648C55.9216 24.5008 56.2352 24.7152 56.5728 24.7152C56.6576 24.7152 56.7392 24.7024 56.8224 24.6752C57.2416 24.5376 57.4688 24.0848 57.3312 23.6656C56.4576 21.0096 55.1712 18.5152 53.512 16.2528C53.2496 15.896 52.7472 15.8192 52.3952 16.0816C52.04 16.344 51.9616 16.8432 52.2256 17.2C53.784 19.3248 54.9904 21.6688 55.8112 24.1648ZM64 32C64 49.6432 49.6432 64 32 64C14.3552 64 0 49.6432 0 32C0 14.3552 14.3552 0 32 0C49.6432 0 64 14.3552 64 32ZM60.8 32C60.8 16.12 47.88 3.2 32 3.2C16.12 3.2 3.2 16.12 3.2 32C3.2 47.88 16.12 60.8 32 60.8C47.88 60.8 60.8 47.88 60.8 32ZM34.6976 33.3088C34.1632 33.1056 33.3472 33.0032 32.2528 33.0032H29.752V37.1856C29.7616 37.7776 29.784 38.1232 29.8208 38.224C29.8672 38.3504 29.9424 38.4432 30.0496 38.4928C30.1552 38.5408 30.4432 38.5712 30.912 38.5712H32.32C33.1392 38.5712 33.8192 38.4928 34.3552 38.3376C34.896 38.1872 35.3552 37.8704 35.7296 37.3888C36.104 36.9072 36.296 36.3328 36.296 35.6576C36.296 35.0864 36.1616 34.6016 35.896 34.2016C35.632 33.8128 35.232 33.512 34.6976 33.3088ZM55.0976 32C55.0976 44.7568 44.7568 55.0976 32 55.0976C19.2448 55.0976 8.904 44.7568 8.904 32C8.904 19.2448 19.2448 8.904 32 8.904C44.7568 8.904 55.0976 19.2448 55.0976 32ZM41.3152 36.1744C41.3152 35.3168 41.112 34.5408 40.7056 33.8432C40.2992 33.1424 39.7456 32.6032 39.0592 32.2112C38.5776 31.9328 37.888 31.6784 36.9808 31.4496C37.824 31.1632 38.5024 30.8016 39.0144 30.3616C39.528 29.9232 39.9216 29.4176 40.1952 28.8464C40.4672 28.2736 40.6032 27.6688 40.6032 27.032C40.6032 26.1552 40.3456 25.3488 39.8336 24.6144C39.3152 23.8816 38.5776 23.3168 37.6176 22.9264C37.2432 22.7744 36.7984 22.6592 36.32 22.5664V19.1568H33.048V22.336H30.9456V19.1568H27.6736V22.336H22.6832V25.008H23.4464C23.9536 25.008 24.2976 25.056 24.4784 25.1472C24.6592 25.2384 24.7856 25.3648 24.8592 25.52C24.9344 25.6768 24.9712 26.0432 24.9712 26.6144V37.3888C24.9712 37.9552 24.936 38.3152 24.8592 38.4768C24.7856 38.64 24.6592 38.7648 24.4784 38.8496C24.2976 38.9376 23.9552 38.9824 23.4464 38.9824H22.6832V41.6544H27.6736V44.832H30.9456V41.6544H32.8064C32.8928 41.6544 32.9712 41.6528 33.0496 41.6528V44.832H36.3216V41.3792C36.8704 41.2736 37.3552 41.1408 37.7632 40.9728C38.8912 40.5232 39.7632 39.8672 40.3856 39.0032C41.0048 38.1456 41.3152 37.2 41.3152 36.1744ZM34.3264 29.8864C34.8592 29.7024 35.256 29.4224 35.5248 29.0528C35.792 28.68 35.9248 28.2464 35.9248 27.7568C35.9248 27.2496 35.7984 26.816 35.5456 26.456C35.2912 26.096 34.9216 25.84 34.4448 25.688C33.9632 25.5344 33.104 25.4576 31.8704 25.4576H29.752V30.1664H31.8704C32.9776 30.1648 33.7952 30.072 34.3264 29.8864Z"
                            fill="#0F5AE0" />
                    </svg>

                    <p class="predesc">Стартапы из сферы:</p>
                    <p class="desc">Криптовалюты</p>
                </div>
                <div class="startaps__tab">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M38.25 10.375C37.56 10.375 37 10.935 37 11.625C37 12.315 37.56 12.875 38.25 12.875C38.94 12.875 39.5 12.315 39.5 11.625C39.5 10.935 38.94 10.375 38.25 10.375Z"
                            fill="#0F5AE0" />
                        <path
                            d="M25.75 10.375C25.06 10.375 24.5 10.935 24.5 11.625C24.5 12.315 25.06 12.875 25.75 12.875C26.44 12.875 27 12.315 27 11.625C27 10.935 26.44 10.375 25.75 10.375Z"
                            fill="#0F5AE0" />
                        <path
                            d="M59.1404 37.3602C60.2132 35.75 60.75 33.7409 60.75 32C60.75 29.3755 59.5841 26.9371 57.5835 25.2836C58.0262 24.2256 58.25 23.1252 58.25 22C58.25 18.5181 56.218 15.2746 53.1969 13.76C53.6553 9.95825 51.178 6.4735 47.5069 5.58462C46.07 2.263 42.8719 0 39.5 0C36.3613 0 33.5461 1.83075 32 4.502C30.4538 1.83075 27.6386 0 24.5 0C21.1279 0 17.9298 2.263 16.4931 5.58475C12.8 6.47925 10.346 9.98137 10.8031 13.76C7.78213 15.2745 5.75 18.5181 5.75 22C5.75 23.1252 5.97375 24.2256 6.4165 25.2836C4.41588 26.9373 3.25 29.3755 3.25 32C3.25 33.75 3.79125 35.7565 4.85962 37.3601C3.81562 38.8339 3.25 40.5805 3.25 42.375C3.25 44.702 4.1935 46.9188 5.86237 48.5648C5.00437 53.7513 9.14062 59 14.5 59C14.5387 59 14.5769 58.9994 14.6143 58.9982C16.3911 62.0635 19.6894 64 23.25 64C26.961 64 30.277 61.7725 32 58.5633C33.723 61.7725 37.039 64 40.75 64C44.3106 64 47.6089 62.0635 49.3857 58.9982C49.4232 58.9994 49.4613 59 49.5 59C54.243 59 58.25 54.8213 58.25 49.875C58.25 49.4539 58.213 49.0208 58.1376 48.5648C59.8065 46.9188 60.75 44.7021 60.75 42.375C60.75 40.5805 60.1844 38.8339 59.1404 37.3602ZM30.75 18.9226C30.014 18.4958 29.1604 18.25 28.25 18.25C27.5596 18.25 27 18.8096 27 19.5C27 20.1904 27.5596 20.75 28.25 20.75C29.6285 20.75 30.75 21.8715 30.75 23.25V47.0211C28.9161 44.941 26.2346 43.625 23.25 43.625C22.5596 43.625 22 44.1846 22 44.875C22 45.5654 22.5596 46.125 23.25 46.125C27.3855 46.125 30.75 49.4895 30.75 53.625C30.75 57.8936 27.3154 61.5 23.25 61.5C20.356 61.5 17.6919 59.7886 16.4626 57.14C16.236 56.6519 15.7227 56.364 15.1876 56.4243C15.0992 56.4344 15.0114 56.4461 14.9235 56.4581C11.366 56.9446 7.35975 52.9163 8.44425 48.4098C8.55562 47.9469 8.39437 47.4611 8.0285 47.1566C6.5805 45.9517 5.75 44.2089 5.75 42.375C5.75 41.2411 6.07063 40.1315 6.66725 39.1585C8.1665 40.3872 10.0314 41.125 12 41.125C12.6904 41.125 13.25 40.5654 13.25 39.875C13.25 39.1846 12.6904 38.625 12 38.625C8.60763 38.625 5.75 35.5288 5.75 32C5.75 29.8594 6.84112 27.8901 8.669 26.7323C9.23212 26.3755 9.41625 25.6396 9.08737 25.0597C8.53175 24.0799 8.25 23.0504 8.25 22C8.25 18.6262 11.0002 15.375 14.5 15.375C17.8295 15.375 20.75 18.4709 20.75 22C20.75 22.6904 21.3096 23.25 22 23.25C22.6904 23.25 23.25 22.6904 23.25 22C23.25 17.0537 19.243 12.875 14.5 12.875C14.0815 12.875 13.6652 12.9089 13.2531 12.973C13.2525 12.9401 13.25 12.9081 13.25 12.875C13.25 10.0854 15.5146 7.875 18.25 7.875C19.5853 7.875 20.8413 8.39512 21.7865 9.33937C22.2749 9.82725 23.0662 9.82675 23.5543 9.3385C24.0421 8.85 24.0417 8.05863 23.5534 7.57075C22.413 6.43163 20.9706 5.70512 19.4075 5.46438C20.5099 3.828 22.343 2.5 24.5 2.5C27.8295 2.5 30.75 5.59575 30.75 9.125V18.9226ZM52 41.125C53.9688 41.125 55.8336 40.3871 57.3329 39.1589C57.9294 40.1317 58.25 41.2412 58.25 42.375C58.25 44.2089 57.4195 45.9517 55.9716 47.1566C55.6056 47.4611 55.4445 47.947 55.5559 48.4098C55.6884 48.9601 55.75 49.4258 55.75 49.8749C55.75 53.7549 52.2406 56.8906 49.0766 56.4581C48.9888 56.4461 48.9007 56.4342 48.8124 56.4243C48.2765 56.3636 47.7639 56.6519 47.5375 57.14C46.3083 59.7886 43.6439 61.5 40.75 61.5C36.6846 61.5 33.25 57.8936 33.25 53.625C33.25 49.4895 36.6145 46.125 40.75 46.125C41.4403 46.125 42 45.5654 42 44.875C42 44.1846 41.4403 43.625 40.75 43.625C37.7654 43.625 35.0839 44.941 33.25 47.0211V23.25C33.25 21.8715 34.3715 20.75 35.75 20.75C36.4403 20.75 37 20.1904 37 19.5C37 18.8096 36.4403 18.25 35.75 18.25C34.8396 18.25 33.986 18.4958 33.25 18.9226V9.125C33.25 5.59575 36.1705 2.5 39.5 2.5C41.657 2.5 43.49 3.828 44.5924 5.46425C43.0294 5.705 41.5871 6.4315 40.4466 7.57062C39.9581 8.0585 39.9576 8.84988 40.4455 9.33838C40.9334 9.82687 41.725 9.82725 42.2132 9.33937C43.1589 8.39512 44.4147 7.875 45.75 7.875C48.4991 7.875 50.75 10.0984 50.75 12.875C50.75 12.908 50.7475 12.9401 50.7469 12.973C50.3348 12.9089 49.9185 12.875 49.5 12.875C44.757 12.875 40.75 17.0537 40.75 22C40.75 22.6904 41.3097 23.25 42 23.25C42.6903 23.25 43.25 22.6904 43.25 22C43.25 18.4709 46.1705 15.375 49.5 15.375C52.9977 15.375 55.75 18.6246 55.75 22C55.75 23.0504 55.4683 24.0799 54.9126 25.0597C54.5839 25.6396 54.768 26.3755 55.3311 26.7323C57.1589 27.8901 58.25 29.8594 58.25 32C58.25 35.5414 55.3824 38.625 52 38.625C51.3097 38.625 50.75 39.1846 50.75 39.875C50.75 40.5654 51.3097 41.125 52 41.125Z"
                            fill="#0F5AE0" />
                        <path
                            d="M27.9316 26.7566C27.4714 26.2421 26.6812 26.1981 26.1666 26.6584C22.1581 30.244 15.75 27.3784 15.75 22C15.75 21.3096 15.1904 20.75 14.5 20.75C13.8096 20.75 13.25 21.3096 13.25 22C13.25 26.3394 16.4259 29.9494 20.575 30.6321C20.0937 32.1481 18.6732 33.25 17 33.25C16.3096 33.25 15.75 33.8096 15.75 34.5C15.75 35.1904 16.3096 35.75 17 35.75C20.0446 35.75 22.5862 33.5612 23.1377 30.6747C24.8761 30.4474 26.5122 29.7035 27.8334 28.5216C28.3479 28.0614 28.3919 27.2711 27.9316 26.7566Z"
                            fill="#0F5AE0" />
                        <path
                            d="M14.5 48.625C13.8096 48.625 13.25 49.1846 13.25 49.875C13.25 50.5654 13.8096 51.125 14.5 51.125C17.8295 51.125 20.75 54.2209 20.75 57.75C20.75 58.4404 21.3096 59 22 59C22.6904 59 23.25 58.4404 23.25 57.75C23.25 52.8038 19.243 48.625 14.5 48.625Z"
                            fill="#0F5AE0" />
                        <path
                            d="M24.5 38.625C20.2642 38.625 16.6275 40.9481 14.7125 44.326C14.3721 44.9266 14.583 45.6895 15.1835 46.0299C15.7841 46.3702 16.5469 46.1595 16.8874 45.5589C18.3792 42.9269 21.21 41.125 24.5 41.125C25.1904 41.125 25.75 40.5654 25.75 39.875C25.75 39.1846 25.1904 38.625 24.5 38.625Z"
                            fill="#0F5AE0" />
                        <path
                            d="M47 33.25C45.3267 33.25 43.9062 32.1481 43.425 30.6321C47.5741 29.9494 50.75 26.3394 50.75 22C50.75 21.3096 50.1902 20.75 49.5 20.75C48.8097 20.75 48.25 21.3096 48.25 22C48.25 25.4462 45.4462 28.25 42 28.25C40.4605 28.25 38.9809 27.6847 37.8334 26.6584C37.319 26.1981 36.5286 26.242 36.0684 26.7566C35.608 27.2711 35.6521 28.0614 36.1666 28.5216C37.4877 29.7035 39.124 30.4474 40.8622 30.6747C41.4137 33.5612 43.9554 35.75 47 35.75C47.6902 35.75 48.25 35.1904 48.25 34.5C48.25 33.8096 47.6902 33.25 47 33.25Z"
                            fill="#0F5AE0" />
                        <path
                            d="M49.5 48.625C44.757 48.625 40.75 52.8038 40.75 57.75C40.75 58.4404 41.3098 59 42 59C42.6902 59 43.25 58.4404 43.25 57.75C43.25 54.2209 46.1705 51.125 49.5 51.125C50.1903 51.125 50.75 50.5654 50.75 49.875C50.75 49.1846 50.1903 48.625 49.5 48.625Z"
                            fill="#0F5AE0" />
                        <path
                            d="M49.2875 44.3261C47.3772 40.9563 43.7455 38.625 39.5 38.625C38.8098 38.625 38.25 39.1846 38.25 39.875C38.25 40.5654 38.8098 41.125 39.5 41.125C42.7876 41.125 45.6205 42.9264 47.1124 45.5589C47.4532 46.1603 48.2166 46.37 48.8162 46.03C49.4169 45.6896 49.6277 44.9268 49.2875 44.3261Z"
                            fill="#0F5AE0" />
                    </svg>

                    <p class="predesc">Стартапы из сферы:</p>
                    <p class="desc">ИИ</p>
                </div>
                <div class="startaps__tab">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M58.864 16.4735C58.7874 14.7898 58.7874 13.1827 58.7874 11.5755C58.7874 10.2744 57.7925 9.27952 56.4915 9.27952C46.925 9.27952 39.6544 6.52436 33.6084 0.63139C32.69 -0.210463 31.3124 -0.210463 30.394 0.63139C24.348 6.52436 17.0774 9.27952 7.51091 9.27952C6.20986 9.27952 5.21495 10.2744 5.21495 11.5755C5.21495 13.1827 5.21495 14.7898 5.13841 16.4735C4.83228 32.5453 4.37309 54.5865 31.2359 63.8469L32.0012 64L32.7665 63.8469C59.5527 54.5865 59.1701 32.6218 58.864 16.4735ZM30.1644 38.7444C29.7052 39.1271 29.1695 39.3566 28.5572 39.3566H28.4807C27.8685 39.3566 27.2562 39.0505 26.8735 38.5913L19.756 30.7085L23.2 27.6472L28.7868 33.8463L41.185 22.0604L44.3229 25.4278L30.1644 38.7444Z"
                            fill="#0F5AE0" />
                    </svg>
                    <p class="predesc">Стартапы из сферы:</p>
                    <p class="desc"> Нефть</p>
                </div>
                <div class="startaps__tab">
                    <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.3745 15.0573C14.9007 15.0573 14.6215 15.3003 14.4513 15.7739C13.8563 17.4622 13.2976 19.4055 12.6903 21.118L10.8928 15.762C10.735 15.2883 10.4069 15.0454 9.9211 15.0454C9.27735 15.0454 8.94948 15.3734 8.94948 16.017C8.94948 16.1384 8.97373 16.272 9.0101 16.4057L11.5851 23.5473C11.8158 24.191 12.1802 24.5189 12.6782 24.5189C13.2127 24.5189 13.6012 24.1666 13.8563 23.45L16.3462 16.4298C16.3947 16.3325 16.4312 16.199 16.4312 16.0775C16.4312 15.5552 15.8725 15.0573 15.3745 15.0573Z"
                            fill="#0F5AE0" />
                        <path
                            d="M22.2733 20.3894C23.2571 19.7578 23.7064 18.8226 23.7064 17.8996C23.7064 16.4542 22.5771 15.0696 20.5365 15.0696H18.1195C17.33 15.0696 16.9171 15.3853 16.9171 16.0777H16.917V23.4502C16.917 24.1668 17.245 24.5191 17.9008 24.5191C18.5446 24.5191 18.8603 24.1668 18.8603 23.4502V20.8874H20.2692L21.7996 23.9967C22.0182 24.4218 22.3462 24.5311 22.6862 24.5311C23.3178 24.5311 23.6093 24.1423 23.6093 23.5958C23.6093 23.3894 23.5364 23.1708 23.4514 22.9643L22.2733 20.3894ZM20.6216 18.9562H18.8605V17.013H20.6216C21.3867 17.013 21.7147 17.4502 21.7147 17.8996C21.7147 18.4097 21.3017 18.9562 20.6216 18.9562Z"
                            fill="#0F5AE0" />
                        <path
                            d="M63.9754 40.5868L62.9325 33.6846C62.7695 32.6057 61.8591 31.8226 60.768 31.8226H57.605C56.4303 29.0058 53.7369 26.9959 50.5761 26.7852C50.4439 26.7763 50.3116 26.7676 50.1793 26.7587C43.3963 26.3064 36.3369 25.2363 29.5468 25.6891C29.3243 25.7039 29.1019 25.7187 28.8794 25.7336C29.6322 24.0508 30.0518 22.1878 30.0518 20.2283C30.0518 12.7681 23.9824 6.69873 16.5223 6.69873C11.3947 6.69873 6.76811 9.54172 4.44799 14.1183C4.21311 14.5817 4.39824 15.1478 4.86173 15.3827C5.32498 15.6176 5.89123 15.4325 6.12611 14.969C8.12398 11.0282 12.1075 8.5801 16.5223 8.5801C22.9451 8.5801 28.1704 13.8053 28.1704 20.2282C28.1704 22.2772 27.6381 24.2039 26.7052 25.8784C22.1719 26.1807 17.6386 26.4828 13.1053 26.7851C11.3557 26.9017 9.74997 27.5708 8.46498 28.6217C6.44298 26.6833 5.10973 24.0252 4.90273 21.0493C4.86661 20.531 4.41724 20.1403 3.89899 20.1762C3.38074 20.2123 2.98974 20.6616 3.02586 21.18C3.25886 24.5309 4.72061 27.6486 7.1456 29.9803C6.71423 30.5412 6.35311 31.1592 6.07648 31.8226H3.23199C2.14087 31.8226 1.23062 32.6057 1.06749 33.6846L0.0246196 40.5868C-0.0706301 41.218 0.113369 41.8574 0.529744 42.3413C0.945993 42.8252 1.55087 43.1027 2.18912 43.1027H4.34674L3.71636 48.0615C3.41924 50.3981 4.14199 52.7521 5.69898 54.5196C7.25598 56.2871 9.49997 57.3009 11.8555 57.3009H18.398C19.9803 57.3009 21.5406 57.0374 23.0353 56.5178L31.5139 53.5704H32.1673L40.6459 56.5178C41.1368 56.6885 41.6728 56.429 41.8434 55.9381C42.014 55.4474 41.7545 54.9113 41.2638 54.7406L32.6351 51.741C32.5357 51.7065 32.4313 51.6889 32.3262 51.6889H31.3551C31.2499 51.6889 31.1454 51.7065 31.0462 51.741L22.4176 54.7406C21.122 55.191 19.7696 55.4194 18.398 55.4194H11.8555C10.0401 55.4194 8.31073 54.6381 7.11073 53.2759C5.91073 51.9138 5.35373 50.0996 5.58273 48.2988L6.34636 42.2914L7.6501 32.9833C8.44648 30.5848 10.6333 28.8354 13.2303 28.6623C18.6282 28.3024 24.0261 27.9426 29.4238 27.5828C36.2954 27.1247 43.4854 28.1981 50.3964 28.6587C50.4145 28.6599 50.4328 28.6611 50.4509 28.6623C53.4614 28.8631 55.9225 31.1811 56.303 34.1742L58.0985 48.2986C58.3274 50.0995 57.7705 51.9136 56.5705 53.2758C55.3705 54.638 53.6411 55.4193 51.8258 55.4193H47.7625C47.243 55.4193 46.8218 55.8405 46.8218 56.36C46.8218 56.8795 47.2429 57.3008 47.7625 57.3008H51.826C54.1815 57.3008 56.4255 56.287 57.9825 54.5195C59.5395 52.752 60.2622 50.3981 59.9651 48.0614L59.3347 43.1025H61.811C62.4492 43.1025 63.0541 42.825 63.4704 42.3412C63.8866 41.8575 64.0706 41.218 63.9754 40.5868ZM5.51211 33.937L4.58611 41.2213H2.18924V41.2214C2.06649 41.2214 1.99049 41.1544 1.95612 41.1144C1.92174 41.0745 1.86674 40.9893 1.88512 40.8679L2.92799 33.9657C2.95086 33.8141 3.07874 33.7041 3.23211 33.7041H5.54698C5.53486 33.7816 5.52198 33.8588 5.51211 33.937ZM62.044 41.1144C62.0096 41.1544 61.9336 41.2214 61.8109 41.2214H59.4035L58.3505 33.7042H60.768C60.9212 33.7042 61.0491 33.8142 61.0721 33.9658L62.115 40.8679C62.1334 40.9893 62.0784 41.0744 62.044 41.1144Z"
                            fill="#0F5AE0" />
                        <path
                            d="M35.3038 31.8228H27.4066C26.8869 31.8228 26.4658 32.2439 26.4658 32.7635C26.4658 33.2831 26.8871 33.7043 27.4066 33.7043H35.3038C35.8233 33.7043 36.2446 33.2831 36.2446 32.7635C36.2446 32.2439 35.8233 31.8228 35.3038 31.8228Z"
                            fill="#0F5AE0" />
                        <path
                            d="M47.7114 37.7111C47.374 37.3161 46.7802 37.2693 46.3852 37.6068L41.8339 41.4942C41.4389 41.8316 41.3922 42.4254 41.7297 42.8204C41.9158 43.0383 42.1798 43.1502 42.4454 43.1502C42.6615 43.1502 42.8788 43.0761 43.0559 42.9247L47.6072 39.0373C48.0022 38.6999 48.0489 38.1061 47.7114 37.7111Z"
                            fill="#0F5AE0" />
                        <path
                            d="M52.4844 39.5182C52.1471 39.1232 51.5533 39.0765 51.1582 39.414L39.7914 49.1231C39.3964 49.4604 39.3497 50.0543 39.6872 50.4493C39.8733 50.6672 40.1373 50.7791 40.4029 50.7791C40.6191 50.7791 40.8363 50.7049 41.0134 50.5536L52.3802 40.8445C52.7752 40.5071 52.8219 39.9132 52.4844 39.5182Z"
                            fill="#0F5AE0" />
                        <path
                            d="M19.5131 37.7111C19.1757 37.3161 18.582 37.2693 18.1868 37.6068L13.6357 41.4942C13.2407 41.8316 13.194 42.4254 13.5315 42.8204C13.7176 43.0383 13.9816 43.1502 14.2472 43.1502C14.4633 43.1502 14.6806 43.0761 14.8577 42.9247L19.4088 39.0373C19.8038 38.6999 19.8506 38.1061 19.5131 37.7111Z"
                            fill="#0F5AE0" />
                        <path
                            d="M24.2862 39.5182C23.9488 39.1232 23.355 39.0765 22.96 39.414L11.5932 49.1231C11.1982 49.4604 11.1515 50.0543 11.489 50.4493C11.6751 50.6672 11.9391 50.7791 12.2047 50.7791C12.4209 50.7791 12.6381 50.7049 12.8152 50.5536L24.182 40.8445C24.577 40.5071 24.6237 39.9132 24.2862 39.5182Z"
                            fill="#0F5AE0" />
                    </svg>

                    <p class="predesc">Стартапы из сферы:</p>
                    <p class="desc">Ценные металлы</p>
                </div>
            </div>
            <div class="startaps__content startaps__content-active ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <img src="/img/startaps_img.png" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="text">
                                <h2 class="text__pretitle">Startups from the scope:</h2>
                                <h3 class="text__title">CRYPTOCURRENCY</h3>
                                <p>
                                    The cryptocurrency market is fluctuating every day at a total capitalization of $ 500 billion, which
                                    in itself is a sensation, given the high volatility. But many experts complain that this is far from
                                    the limit.
                                </p>
                                <p>
                                    For example, analysts at Royal Bank of Canada predict in the near future that the cryptocurrency
                                    market will reach $ 10 trillion in capitalization. One way or another, the cryptocurrency market is
                                    developing and has already become self-sufficient. The critical moment was when in 2017 2 of the 4
                                    major global audit companies - Ernst & Young (EY) and PricewaterhouseCoopers (PwC) - began not only
                                    accepting Bitcoin, but also expanding crypto companies in their portfolios.

                                </p>
                                <p>
                                    Like everything on the market, we at FTF are seeing some weakening interest in cryptocurrencies,
                                    although the quotes of key currencies are pretty stable. Our futurist analysts believe in this very
                                    specific product, so we continue to not only monitor, but also actively invest in both popular
                                    cryptocurrencies and very volatile new crypto products.
                                </p>
                            </div>
                            <button class="text__btn" onclick="location.href='{{ route('login') }}'">START EARNING NOW!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="startaps__content  ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <img src="/img/startaps_img2.png" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="text">
                                <h2 class="text__pretitle">Startups from the scope:</h2>
                                <h3 class="text__title"> Artificial
                                    Intellegence</h3>
                                <p>
                                    The proprietary information product of our own production on the basis of artificial intelligence
                                    helps us guarantee a stable, almost passive income in the field of AI.
                                </p>
                                <p>
                                    How it works?
                                    Artificial intelligence is based on a neural network that is constantly learning, analyzing the
                                    factors and other variables in international trading, also analysing the statistical data and giving
                                    a forecast that is almost always right .
                                </p>
                                <p>
                                    How do we make money from it?
                                    The work is carried out in two directions: our company makes trades based on analysis of the neural
                                    network. To diversify, we always make a choice in favor of a stable and reliable income, avoiding
                                    risky excess profits. In connection with this, the FTF developed a strategy, that will ultimately
                                    lead to a small income, but never to loss of profit.
                                </p>
                            </div>
                            <button class="text__btn" onclick="location.href='{{ route('login') }}'">START EARNING NOW!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="startaps__content  ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <img src="/img/startaps_img3.png" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="text">
                                <h2 class="text__pretitle">Startups from the scope:</h2>
                                <h3 class="text__title">
                                    BLOCKCHAIN AND ICO</h3>
                                <p>
                                    Our business model is based on the principle of 3-level diversification of resources, investments
                                    and risks. This business model allows our company not only to work continiously and be financially
                                    stable in a very volatile market, but also gives the opportunity to make decisions very quickly.
                                    Today we have decided to significantly expand our field of activity and have created a platform for
                                    attracting and implementing investments. The capitalization of our project is based on deep
                                    expertise in the field of investment, the system of modeling and risk leveling, the principles of
                                    ICO, blockchain and crowdfunding.
                                </p>
                            </div>
                            <button class="text__btn" onclick="location.href='{{ route('login') }}'">START EARNING NOW!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="startaps__content  ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <img src="/img/startaps_img4.png" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="text">
                                <h2 class="text__pretitle">Startups from the scope:</h2>
                                <h3 class="text__title">VR Technologies</h3>
                                <p>
                                    According to PricewaterhouseCoopers forecasts, the next 5 years the virtual reality market will grow
                                    by 70% per year and will reach $ 4.6 billion by 2023. The development of this market is directly
                                    related to the development of the video game market and the creation of high-quality and affordable
                                    hardware, primarily VR - helmets and consoles. Virtual reality is already finding a lot of
                                    applications in everyday life: Walmart teaches its employees using VR, startups teach people away to
                                    stop smoking, and Qualcomm believes that VR glasses will soon replace smartphones like they used to
                                    replace laptops.
                                </p>
                                <p>
                                    Our interests in the field of virtual reality are precisely focused on the computer games industry,
                                    which is developing and capitalizing at a fantastic pace. We already have a startup in our portfolio
                                    that should bring a new generation of VR helmets to the market, and we at the company are preparing
                                    a presentation of this project by the end of 2020.
                                </p>
                            </div>
                            <button class="text__btn" onclick="location.href='{{ route('login') }}'">START EARNING NOW!</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="startaps__content  ">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 ">
                            <img src="/img/startaps_img5.png" alt="">
                        </div>
                        <div class="col-lg-6">
                            <div class="text">
                                <h2 class="text__pretitle">Startups from the scope:</h2>
                                <h3 class="text__title">5G NETWORKS</h3>
                                <p>
                                    The global market for public cloud services reached $ 141 billion back in 2016. According to
                                    Gartner's latest forecast, in 2019, the global market for public cloud services will grow by 21.4%,
                                    reaching $ 186.4 billion. Last year, its volume was fixed at around $ 153.5 billion. thanks to the
                                    successful sales of the Azure cloud product, Microsoft is about to become the third company in the
                                    world after Apple and Amazon, and its capitalization will exceed $ 1 trillion. SaaS segment will
                                    remail The largest in the cloud market - with an increase of 22.2%, revenue by the end of this year
                                    will amount to 73.6 billion dollars. It is forecasted that in 2021, SaaS will form at least 45% of
                                    the total costs of software applications.
                                </p>
                                <p>
                                    Investing in 5G clearly follows our business model in the context of diversification of investments
                                    and risks. Hardware is the new sexy. We at FTF are constantly increasing the investments in this
                                    area.
                                </p>
                            </div>
                            <button class="text__btn" onclick="location.href='{{ route('login') }}'">START EARNING NOW!</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--        <div class="video" data-toggle="modal" data-target="#videoModal">--}}
        {{--            <button class="video-btn"></button>--}}
        {{--            <iframe id="video-playing" width="100%" height="1366" data-toggle="modal" data-target="#videoModal"--}}
        {{--                    src="https://www.youtube.com/embed/XuQCJ0v7tPc?autoplay=1&loop=1&mute=1&rel=0&controls=0&showinfo=0&playlist=XuQCJ0v7tPc&start=0&allowfullscreen"--}}
        {{--                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
        {{--                    allowfullscreen></iframe>--}}
        {{--            <button class="play-btn" data-toggle="modal" data-target="#videoModal"></button>--}}
        {{--        </div>--}}
    </section>
    <!-- invest -->
    <section class="invest text-center" id="invest">
        <div class="container">
            <h2 class="title">ИНВЕСТИРОВАТЬ С НАМИ НАДЕЖНО И ВЫГОДНО</h2>
            <p class="subtitle">С чего начать?</p>
            <div class="row">
                <div class="col-md-4 mb-3 wow fadeInUp" data-wow-delay="0.5s" data-wow-duration="0.5s">
                    <div class="block__number n-1">1</div>
                    <h3 class="block__title">Регистрация</h3>
                    <p class="block__desc">Пройдите процедуру регистрации на сайте для открытия счета. Нажмите кнопку «Регистрация» и заполните все необходимые поля
                    </p>
                </div>
                <div class="col-md-4 mb-3 wow fadeInUp" data-wow-delay="0.75s" data-wow-duration="0.5s">
                    <div class="block__number n-2 ">2</div>
                    <h3 class="block__title">Откройте депозит</h3>
                    <p class="block__desc">Сделайте инвестицию на удобный срок на сумму от 100 рублей и ваши деньги начнут работать на вас.</p>
                </div>
                <div class="col-md-4 wow fadeInUp" data-wow-delay="1s" data-wow-duration="0.5s">
                    <div class="block__number n-3">3</div>
                    <h3 class="block__title">Распоряжайтесь прибылью</h3>
                    <p class="block__desc">По факту окончания периода инвестиции вклад с прибылью будут доступы для вывода или создания нового депозита.</p>
                </div>
            </div>
            <a href="{{ route('login') }}"><button class="invest__btn">Начать зарабатывать!</button></a>
        </div>

    </section>
    <!-- Большая секция -->
    <section class="bigSection" id="bigSection">
        <!-- Бизнесс пакеты -->
        <div class="container text-center mt-5">
            <p class="pretitle">Выбирите срок вклада</p>
            <h2 class="title">Пакеты инвестирования</h2>
            <div class="rewind"></div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 mb-md-4 mb-5">
                    <div class="card wow zoomIn" data-wow-duration="0.5s" data-wow-delay="1.5s">
                        <div class="card__img">
                            <img src="/img/cube.png" alt="">
                        </div>
                        <h2 class="investment__title">Вклад на 1 месяц</h2>
                        <ul class="card__list">
                            <li class="list__item list__item-true">5% прибыли в месяц</li>
                            <li class="list__item list__item-true">Ежемесячная выплата</li>
                            </li>
                        </ul>
                        <a href="{{ route('login') }}">
                            <button class="card__btn">Внести вклад</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-md-4 mb-5">
                    <div class="card wow zoomIn" data-wow-duration="0.5s" data-wow-delay="1s">
                        <div class="card__img">
                            <img src="/img/crown.png" alt="">
                        </div>
                        <h2 class="investment__title">Вклад на 3 месяца</h2>
                        <ul class="card__list">
                            <li class="list__item list__item-true">7% прибыли в месяц</li>
                            <li class="list__item list__item-true">Ежемесячная выплата</li>
                            <li class="list__item list__item-true">Капитализация</li>
                            </li>
                        </ul>
                        <a href="{{ route('login') }}">
                            <button class="card__btn">Внести вклад</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-md-4 mb-5">
                    <div class="card wow zoomIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <div class="card__img">
                            <img src="/img/diamand.png" alt="">
                        </div>
                        <h2 class="investment__title">Вклад на 6 месяцев</h2>
                        <ul class="card__list">
                            <li class="list__item list__item-true">9% прибыли в месяц</li>
                            <li class="list__item list__item-true">Ежемесячная выплата</li>
                            <li class="list__item list__item-true">Капитализация</li>
                            </li>
                        </ul>
                        <a href="{{ route('login') }}">
                            <button class="card__btn">Внести вклад</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- statistic -->
    <section class="statistic text-center">
        <div class="gray"></div>
        <img src="https://wallscloud.net/wallpaper/textures/Zelyoniy-Fon/pX4N/1920x1080/download" alt="" class="statistic__bg">
        <div class="container">
            <h2 class="title">Наша статистика</h2>
            <div class="hand mb-sm-5"></div>
            <!-- инфа -->
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-12 mb-5 mb-lg-0 text-center text-lg-left">
                    <div class="block justify-content-start">
                        <img src="/img/users.svg" alt="" class="block__img">
                        <div class="block__info">
                            <p class="numbers numscroller" data-min='1' data-max='484314' data-increment='2000'>484314</p>
                            <p class="numbers__subtitle">Инвесторов</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-5 mb-lg-0 text-center  text-clg-left ">
                    <div class="block justify-content-start">
                        <img src="/img/work.svg" alt="" class="block__img">
                        <div class="block__info">
                            <p class="numbers numscroller" data-min='1' data-max='4039' data-increment='100'>4039</p>
                            <p class="numbers__subtitle">Инвесторов за сегодня</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-12 mb-5 mb-lg-0 text-center text-lg-left">
                    <div class="block  justify-content-start">
                        <img src="/img/credit-card.svg" alt="" class="block__img">
                        <div class="block__info">
                            <p class="numbers numbers-dol numscroller" data-min='1' data-max='1537' data-increment='10'>1537
                            </p>
                            <p class="numbers__subtitle">Средняя прибыль </p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Кнопки -->
            <div class="statistic__buttons mt-5">
                <a href="{{ route('login') }}" class="statistic__btn">Начать зарабатывать</a>
                <a href="{{ route('login') }}" class="statistic__btn mt-3">Калькулятор прибыли</a>
            </div>
        </div>

    </section>
</main>

@component('components.footer')
@endcomponent
<!-- Modals -->
<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title" data-toggle="modal" data-target="#myModal">Profit Calculator
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal body -->
            <div class="modal-body">
                <!-- заголовок -->
                <h2 class="title">Select the term of the deposit:
                </h2>
                <!-- табы -->
                <div class="modal__tabs">
                    <div class="modal__tab modal__tab-active">investment: $1</div>
                    <div class="modal__tab">investment: $500</div>
                    <div class="modal__tab">investment: $5000</div>
                    <div class="modal__tab">investment: $50000</div>
                </div>
                <!-- контент -->
                <div class="modal__content modal__content-active">
                    <!-- инпут -->
                    <h3 class="enter">Enter the amount of investment in 24 hours:</h3>
                    <div class="modal__input">
                        <label for="modal__input">Amount of investment</label>
                        <input type="number" id="modal__input" maxlength="6" value="0">
                    </div>
                    <!-- перс инфа -->
                    <h3 class="info__title">Personal information on the deposit:</h3>
                    <div class="info__blocks">
                        <!-- процент -->
                        <div class="info__block">
                            <h4>GROSS PROFIT</h4>
                            <div class="info__info">
                                <img src="/img/percentage-discount.svg" alt="">
                                <p><span id="procent">0</span>$</p>
                            </div>
                        </div>
                        <!-- график -->
                        <div class="info__block">
                            <h4>THE AMOUNT OF THE DEPOSIT AFTER THE END OF</h4>
                            <div class="info__info">
                                <img src="/img/stats.svg" alt="">
                                <p><span id="sum">0</span>$</p>
                            </div>
                        </div>
                    </div>
                    <button class="modal__btn" onclick="location.href='{{ route('login') }}'">START NOW</button>
                </div>
                <!-- контент -->
                <div class="modal__content">
                    <!-- инпут -->
                    <h3 class="enter">Enter the amount of investment in 7 days:</h3>
                    <div class="modal__input">
                        <label for="modal__input">Amount of investment</label>
                        <input type="number" id="modal__input" maxlength="6" value="0">
                    </div>
                    <!-- перс инфа -->
                    <h3 class="info__title">Personal information on the deposit:</h3>
                    <div class="info__blocks">
                        <!-- процент -->
                        <div class="info__block">
                            <h4>GROSS PROFIT</h4>
                            <div class="info__info">
                                <img src="/img/percentage-discount.svg" alt="">
                                <p><span id="procent">0</span>$</p>
                            </div>
                        </div>
                        <!-- график -->
                        <div class="info__block">
                            <h4>THE AMOUNT OF THE DEPOSIT AFTER THE END OF</h4>
                            <div class="info__info">
                                <img src="/img/stats.svg" alt="">
                                <p><span id="sum">0</span>$</p>
                            </div>
                        </div>
                    </div>
                    <button class="modal__btn" onclick="location.href='{{ route('login') }}'">START NOW</button>
                </div>
                <div class="modal__content">
                    <!-- инпут -->
                    <h3 class="enter">Enter the amount of investment in 14 days:</h3>
                    <div class="modal__input">
                        <label for="modal__input">Amount of investment</label>
                        <input type="number" id="modal__input" maxlength="6" value="0">
                    </div>
                    <!-- перс инфа -->
                    <h3 class="info__title">Personal information on the deposit:</h3>
                    <div class="info__blocks">
                        <!-- процент -->
                        <div class="info__block">
                            <h4>GROSS PROFIT</h4>
                            <div class="info__info">
                                <img src="/img/percentage-discount.svg" alt="">
                                <p><span id="procent">0</span>$</p>
                            </div>
                        </div>
                        <!-- график -->
                        <div class="info__block">
                            <h4>THE AMOUNT OF THE DEPOSIT AFTER THE END OF</h4>
                            <div class="info__info">
                                <img src="/img/stats.svg" alt="">
                                <p><span id="sum">0</span>$</p>
                            </div>
                        </div>
                    </div>
                    <button class="modal__btn" onclick="location.href='{{ route('login') }}'">START NOW</button>
                </div>
                <div class="modal__content">
                    <!-- инпут -->
                    <h3 class="enter">Enter the amount of investment in 30 days:</h3>
                    <div class="modal__input">
                        <label for="modal__input">Amount of investment</label>
                        <input type="number" id="modal__input" maxlength="6" value="0">
                    </div>
                    <!-- перс инфа -->
                    <h3 class="info__title">Personal information on the deposit:</h3>
                    <div class="info__blocks">
                        <!-- процент -->
                        <div class="info__block">
                            <h4>GROSS PROFIT</h4>
                            <div class="info__info">
                                <img src="/img/percentage-discount.svg" alt="">
                                <p><span id="procent">0</span>$</p>
                            </div>
                        </div>
                        <!-- график -->
                        <div class="info__block">
                            <h4>THE AMOUNT OF THE DEPOSIT AFTER THE END OF</h4>
                            <div class="info__info">
                                <img src="/img/stats.svg" alt="">
                                <p><span id="sum">0</span>$</p>
                            </div>
                        </div>
                    </div>
                    <button class="modal__btn" onclick="location.href='{{ route('login') }}'">START NOW</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Video-->
{{--<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="videoModalLabel"--}}
{{--     aria-hidden="true">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <div class="modal-header">--}}
{{--                <h4 class="modal-title" data-toggle="modal" data-target="#sertificate1">Video--}}
{{--                </h4>--}}
{{--                <button type="button" class="close" data-dismiss="modal">&times;</button>--}}
{{--            </div>--}}
{{--            <div class="modal-body modal-content-video">--}}
{{--                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/XuQCJ0v7tPc?autoplay=1&loop=1"--}}
{{--                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"--}}
{{--                        allowfullscreen></iframe>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- Serftificates -->
<!-- scripts -->
<script src="js/scripts.min.js"></script>

<!-- <script src="./libs/animations/numscroller-1.0.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/wow/0.1.12/wow.min.js"></script>
<script>new WOW().init()</script>
</body>

</html>
