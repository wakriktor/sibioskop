<style>
    form.hide-submit input[type="submit"] {
        display: none;
    }

    #search-icon {
        fill: #000;
        height: 40px;
        width: 40px;
    }
</style>

<div class="col-sm-2 fixed-bottom" style="padding: 0px; z-index:0; ">
    <div class="container" style="">
        <div class="row me-5" style="background-color: #222222; height: 86.9vh; ">
            <div class="d-block">
                <ul class="nav nav-pills d-flex">
                    {{-- ICON BERANDA --}}
                    <li class="text-center mt-5" style="width: 100%">
                        <a href="/" class="nav-link" aria-current="page">
                            <svg width="40" height="57" viewBox="0 0 60 86" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M50.5223 46H6.64538C5.74591 46 5 45.2541 5 44.3546C5 43.4551 5.74591 42.7092 6.64538 42.7092H50.5223C51.4217 42.7092 52.1676 43.4551 52.1676 44.3546C52.1676 45.2541 51.4217 46 50.5223 46Z"
                                    fill="#8B8B8B" />
                                <path
                                    d="M10.3752 44.354H7.08447L7.19414 17.9621C7.19414 16.0973 8.04976 14.3642 9.51964 13.2234L24.8765 1.26694C27.0484 -0.422315 30.0979 -0.422315 32.2917 1.26694L47.6486 13.2015C49.0966 14.3423 49.9741 16.1192 49.9741 17.9621V44.354H46.6833V17.984C46.6833 17.1504 46.2884 16.3386 45.6303 15.8121L30.2734 3.87762C29.2862 3.10977 27.904 3.10977 26.8949 3.87762L11.538 15.8341C10.8798 16.3387 10.4849 17.1504 10.4849 17.984L10.3752 44.354Z"
                                    fill="#8B8B8B" />
                                <path
                                    d="M34.0685 46H23.0992C22.1998 46 21.4539 45.2541 21.4539 44.3547V36.6762C21.4539 33.9558 23.6696 31.7401 26.39 31.7401H30.7777C33.4981 31.7401 35.7138 33.9558 35.7138 36.6762V44.3547C35.7138 45.2541 34.9679 46 34.0685 46ZM24.7446 42.7093H32.4231V36.6762C32.4231 35.7767 31.6772 35.0308 30.7777 35.0308H26.39C25.4905 35.0308 24.7446 35.7767 24.7446 36.6762V42.7093Z"
                                    fill="#8B8B8B" />
                                <path
                                    d="M23.0992 27.9008H18.7115C16.6055 27.9008 14.8723 26.1677 14.8723 24.0616V20.7708C14.8723 18.6647 16.6055 16.9316 18.7115 16.9316H23.0992C25.2053 16.9316 26.9385 18.6647 26.9385 20.7708V24.0616C26.9385 26.1677 25.2053 27.9008 23.0992 27.9008ZM18.7115 20.2223C18.4044 20.2223 18.1631 20.4637 18.1631 20.7708V24.0616C18.1631 24.3687 18.4044 24.61 18.7115 24.61H23.0992C23.4064 24.61 23.6477 24.3687 23.6477 24.0616V20.7708C23.6477 20.4637 23.4064 20.2223 23.0992 20.2223H18.7115Z"
                                    fill="#8B8B8B" />
                                <path
                                    d="M38.4562 27.9008H34.0685C31.9624 27.9008 30.2292 26.1677 30.2292 24.0616V20.7708C30.2292 18.6647 31.9624 16.9316 34.0685 16.9316H38.4562C40.5623 16.9316 42.2954 18.6647 42.2954 20.7708V24.0616C42.2954 26.1677 40.5623 27.9008 38.4562 27.9008ZM34.0685 20.2223C33.7613 20.2223 33.52 20.4637 33.52 20.7708V24.0616C33.52 24.3687 33.7613 24.61 34.0685 24.61H38.4562C38.7633 24.61 39.0046 24.3687 39.0046 24.0616V20.7708C39.0046 20.4637 38.7633 20.2223 38.4562 20.2223H34.0685Z"
                                    fill="#8B8B8B" />
                                <path
                                    d="M43.941 13.0924C43.0416 13.0924 42.2957 12.3684 42.2957 11.469L42.2518 6.51086H34.2443C33.3448 6.51086 32.5989 5.76495 32.5989 4.86548C32.5989 3.966 33.3448 3.22009 34.2443 3.22009H43.8972C44.7966 3.22009 45.5426 3.94404 45.5426 4.84351L45.6084 11.425C45.5864 12.3465 44.8625 13.0924 43.941 13.0924Z"
                                    fill="#8B8B8B" />
                                <path
                                    d="M5.964 74.974C6.31867 75.03 6.64067 75.1747 6.93 75.408C7.22867 75.6413 7.462 75.9307 7.63 76.276C7.80733 76.6213 7.896 76.99 7.896 77.382C7.896 77.8767 7.77 78.3247 7.518 78.726C7.266 79.118 6.89733 79.4307 6.412 79.664C5.936 79.888 5.37133 80 4.718 80H1.078V70.242H4.578C5.24067 70.242 5.80533 70.354 6.272 70.578C6.73867 70.7927 7.08867 71.0867 7.322 71.46C7.55533 71.8333 7.672 72.2533 7.672 72.72C7.672 73.2987 7.51333 73.7793 7.196 74.162C6.888 74.5353 6.47733 74.806 5.964 74.974ZM2.352 74.456H4.494C5.09133 74.456 5.55333 74.316 5.88 74.036C6.20667 73.756 6.37 73.3687 6.37 72.874C6.37 72.3793 6.20667 71.992 5.88 71.712C5.55333 71.432 5.082 71.292 4.466 71.292H2.352V74.456ZM4.606 78.95C5.24067 78.95 5.73533 78.8007 6.09 78.502C6.44467 78.2033 6.622 77.788 6.622 77.256C6.622 76.7147 6.43533 76.29 6.062 75.982C5.68867 75.6647 5.18933 75.506 4.564 75.506H2.352V78.95H4.606ZM16.6639 75.87C16.6639 76.1127 16.6499 76.3693 16.6219 76.64H10.4899C10.5366 77.396 10.7933 77.9887 11.2599 78.418C11.7359 78.838 12.3099 79.048 12.9819 79.048C13.5326 79.048 13.9899 78.922 14.3539 78.67C14.7273 78.4087 14.9886 78.0633 15.1379 77.634H16.5099C16.3046 78.3713 15.8939 78.9733 15.2779 79.44C14.6619 79.8973 13.8966 80.126 12.9819 80.126C12.2539 80.126 11.6006 79.9627 11.0219 79.636C10.4526 79.3093 10.0046 78.8473 9.67794 78.25C9.35127 77.6433 9.18794 76.9433 9.18794 76.15C9.18794 75.3567 9.3466 74.6613 9.66394 74.064C9.98127 73.4667 10.4246 73.0093 10.9939 72.692C11.5726 72.3653 12.2353 72.202 12.9819 72.202C13.7099 72.202 14.3539 72.3607 14.9139 72.678C15.4739 72.9953 15.9033 73.434 16.2019 73.994C16.5099 74.5447 16.6639 75.17 16.6639 75.87ZM15.3479 75.604C15.3479 75.1187 15.2406 74.7033 15.0259 74.358C14.8113 74.0033 14.5173 73.7373 14.1439 73.56C13.7799 73.3733 13.3739 73.28 12.9259 73.28C12.2819 73.28 11.7313 73.4853 11.2739 73.896C10.8259 74.3067 10.5693 74.876 10.5039 75.604H15.3479ZM19.6196 73.574C19.8436 73.1353 20.1609 72.7947 20.5716 72.552C20.9916 72.3093 21.5002 72.188 22.0976 72.188V73.504H21.7616C20.3336 73.504 19.6196 74.2787 19.6196 75.828V80H18.3456V72.328H19.6196V73.574ZM23.0922 76.136C23.0922 75.352 23.2509 74.666 23.5682 74.078C23.8856 73.4807 24.3196 73.0187 24.8702 72.692C25.4302 72.3653 26.0509 72.202 26.7322 72.202C27.4042 72.202 27.9876 72.3467 28.4822 72.636C28.9769 72.9253 29.3456 73.2893 29.5882 73.728V72.328H30.8762V80H29.5882V78.572C29.3362 79.02 28.9582 79.3933 28.4542 79.692C27.9596 79.9813 27.3809 80.126 26.7182 80.126C26.0369 80.126 25.4209 79.958 24.8702 79.622C24.3196 79.286 23.8856 78.8147 23.5682 78.208C23.2509 77.6013 23.0922 76.9107 23.0922 76.136ZM29.5882 76.15C29.5882 75.5713 29.4716 75.0673 29.2382 74.638C29.0049 74.2087 28.6876 73.882 28.2862 73.658C27.8942 73.4247 27.4602 73.308 26.9842 73.308C26.5082 73.308 26.0742 73.42 25.6822 73.644C25.2902 73.868 24.9776 74.1947 24.7442 74.624C24.5109 75.0533 24.3942 75.5573 24.3942 76.136C24.3942 76.724 24.5109 77.2373 24.7442 77.676C24.9776 78.1053 25.2902 78.4367 25.6822 78.67C26.0742 78.894 26.5082 79.006 26.9842 79.006C27.4602 79.006 27.8942 78.894 28.2862 78.67C28.6876 78.4367 29.0049 78.1053 29.2382 77.676C29.4716 77.2373 29.5882 76.7287 29.5882 76.15ZM36.7672 72.188C37.7005 72.188 38.4565 72.4727 39.0352 73.042C39.6138 73.602 39.9032 74.414 39.9032 75.478V80H38.6432V75.66C38.6432 74.8947 38.4518 74.3113 38.0692 73.91C37.6865 73.4993 37.1638 73.294 36.5012 73.294C35.8292 73.294 35.2925 73.504 34.8912 73.924C34.4992 74.344 34.3032 74.9553 34.3032 75.758V80H33.0292V72.328H34.3032V73.42C34.5552 73.028 34.8958 72.7247 35.3252 72.51C35.7638 72.2953 36.2445 72.188 36.7672 72.188ZM41.5083 76.136C41.5083 75.352 41.6669 74.666 41.9843 74.078C42.3016 73.4807 42.7356 73.0187 43.2863 72.692C43.8463 72.3653 44.4716 72.202 45.1623 72.202C45.7596 72.202 46.3149 72.342 46.8283 72.622C47.3416 72.8927 47.7336 73.252 48.0043 73.7V69.64H49.2923V80H48.0043V78.558C47.7523 79.0153 47.3789 79.3933 46.8843 79.692C46.3896 79.9813 45.8109 80.126 45.1483 80.126C44.4669 80.126 43.8463 79.958 43.2863 79.622C42.7356 79.286 42.3016 78.8147 41.9843 78.208C41.6669 77.6013 41.5083 76.9107 41.5083 76.136ZM48.0043 76.15C48.0043 75.5713 47.8876 75.0673 47.6543 74.638C47.4209 74.2087 47.1036 73.882 46.7023 73.658C46.3103 73.4247 45.8763 73.308 45.4003 73.308C44.9243 73.308 44.4903 73.42 44.0983 73.644C43.7063 73.868 43.3936 74.1947 43.1603 74.624C42.9269 75.0533 42.8103 75.5573 42.8103 76.136C42.8103 76.724 42.9269 77.2373 43.1603 77.676C43.3936 78.1053 43.7063 78.4367 44.0983 78.67C44.4903 78.894 44.9243 79.006 45.4003 79.006C45.8763 79.006 46.3103 78.894 46.7023 78.67C47.1036 78.4367 47.4209 78.1053 47.6543 77.676C47.8876 77.2373 48.0043 76.7287 48.0043 76.15ZM50.9692 76.136C50.9692 75.352 51.1279 74.666 51.4452 74.078C51.7625 73.4807 52.1965 73.0187 52.7472 72.692C53.3072 72.3653 53.9279 72.202 54.6092 72.202C55.2812 72.202 55.8645 72.3467 56.3592 72.636C56.8539 72.9253 57.2225 73.2893 57.4652 73.728V72.328H58.7532V80H57.4652V78.572C57.2132 79.02 56.8352 79.3933 56.3312 79.692C55.8365 79.9813 55.2579 80.126 54.5952 80.126C53.9139 80.126 53.2979 79.958 52.7472 79.622C52.1965 79.286 51.7625 78.8147 51.4452 78.208C51.1279 77.6013 50.9692 76.9107 50.9692 76.136ZM57.4652 76.15C57.4652 75.5713 57.3485 75.0673 57.1152 74.638C56.8819 74.2087 56.5645 73.882 56.1632 73.658C55.7712 73.4247 55.3372 73.308 54.8612 73.308C54.3852 73.308 53.9512 73.42 53.5592 73.644C53.1672 73.868 52.8545 74.1947 52.6212 74.624C52.3879 75.0533 52.2712 75.5573 52.2712 76.136C52.2712 76.724 52.3879 77.2373 52.6212 77.676C52.8545 78.1053 53.1672 78.4367 53.5592 78.67C53.9512 78.894 54.3852 79.006 54.8612 79.006C55.3372 79.006 55.7712 78.894 56.1632 78.67C56.5645 78.4367 56.8819 78.1053 57.1152 77.676C57.3485 77.2373 57.4652 76.7287 57.4652 76.15Z"
                                    fill="#8B8B8B" />
                            </svg>

                        </a>
                    </li>
                    {{-- ICON BIOSKOP --}}
                    <li class="text-center my-3 " style="width: 100%">
                        @auth
                            @php
                                $user = auth()->user()->id;
                                $lokasi = DB::table('history_lokasis')
                                    ->join('users', 'history_lokasis.user_id', '=', 'users.id')
                                    ->select('history_lokasis.*')
                                    ->where('users.id', '=', $user)
                                    ->orderBy('history_lokasis.id', 'desc')
                                    ->first();
                                $lokasiText = $lokasi ? $lokasi->lokasi : 'silahkanPilihLokasi';
                            @endphp
                            <a href="/lokasi/{{ $lokasiText }}" class="nav-link text-white">
                            @else
                                <a href="/lokasi/{{ $temp_lokasi->lokasi }}" class="nav-link text-white">
                                @endauth
                                <svg width="40" height="57" viewBox="0 0 54 77" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M5.964 65.974C6.31867 66.03 6.64067 66.1747 6.93 66.408C7.22867 66.6413 7.462 66.9307 7.63 67.276C7.80733 67.6213 7.896 67.99 7.896 68.382C7.896 68.8767 7.77 69.3247 7.518 69.726C7.266 70.118 6.89733 70.4307 6.412 70.664C5.936 70.888 5.37133 71 4.718 71H1.078V61.242H4.578C5.24067 61.242 5.80533 61.354 6.272 61.578C6.73867 61.7927 7.08867 62.0867 7.322 62.46C7.55533 62.8333 7.672 63.2533 7.672 63.72C7.672 64.2987 7.51333 64.7793 7.196 65.162C6.888 65.5353 6.47733 65.806 5.964 65.974ZM2.352 65.456H4.494C5.09133 65.456 5.55333 65.316 5.88 65.036C6.20667 64.756 6.37 64.3687 6.37 63.874C6.37 63.3793 6.20667 62.992 5.88 62.712C5.55333 62.432 5.082 62.292 4.466 62.292H2.352V65.456ZM4.606 69.95C5.24067 69.95 5.73533 69.8007 6.09 69.502C6.44467 69.2033 6.622 68.788 6.622 68.256C6.622 67.7147 6.43533 67.29 6.062 66.982C5.68867 66.6647 5.18933 66.506 4.564 66.506H2.352V69.95H4.606ZM10.3219 62.082C10.0793 62.082 9.87394 61.998 9.70594 61.83C9.53794 61.662 9.45394 61.4567 9.45394 61.214C9.45394 60.9713 9.53794 60.766 9.70594 60.598C9.87394 60.43 10.0793 60.346 10.3219 60.346C10.5553 60.346 10.7513 60.43 10.9099 60.598C11.0779 60.766 11.1619 60.9713 11.1619 61.214C11.1619 61.4567 11.0779 61.662 10.9099 61.83C10.7513 61.998 10.5553 62.082 10.3219 62.082ZM10.9379 63.328V71H9.66394V63.328H10.9379ZM16.4553 71.126C15.7366 71.126 15.0833 70.9627 14.4953 70.636C13.9166 70.3093 13.4593 69.8473 13.1233 69.25C12.7966 68.6433 12.6333 67.9433 12.6333 67.15C12.6333 66.366 12.8013 65.6753 13.1373 65.078C13.4826 64.4713 13.9493 64.0093 14.5373 63.692C15.1253 63.3653 15.7833 63.202 16.5113 63.202C17.2393 63.202 17.8973 63.3653 18.4853 63.692C19.0733 64.0093 19.5353 64.4667 19.8713 65.064C20.2166 65.6613 20.3893 66.3567 20.3893 67.15C20.3893 67.9433 20.2119 68.6433 19.8573 69.25C19.5119 69.8473 19.0406 70.3093 18.4433 70.636C17.8459 70.9627 17.1833 71.126 16.4553 71.126ZM16.4553 70.006C16.9126 70.006 17.3419 69.8987 17.7433 69.684C18.1446 69.4693 18.4666 69.1473 18.7093 68.718C18.9613 68.2887 19.0873 67.766 19.0873 67.15C19.0873 66.534 18.9659 66.0113 18.7233 65.582C18.4806 65.1527 18.1633 64.8353 17.7713 64.63C17.3793 64.4153 16.9546 64.308 16.4973 64.308C16.0306 64.308 15.6013 64.4153 15.2093 64.63C14.8266 64.8353 14.5186 65.1527 14.2853 65.582C14.0519 66.0113 13.9353 66.534 13.9353 67.15C13.9353 67.7753 14.0473 68.3027 14.2713 68.732C14.5046 69.1613 14.8126 69.4833 15.1953 69.698C15.5779 69.9033 15.9979 70.006 16.4553 70.006ZM24.7803 71.126C24.1923 71.126 23.665 71.028 23.1983 70.832C22.7317 70.6267 22.363 70.3467 22.0923 69.992C21.8217 69.628 21.6723 69.2127 21.6443 68.746H22.9603C22.9977 69.1287 23.175 69.4413 23.4923 69.684C23.819 69.9267 24.2437 70.048 24.7663 70.048C25.2517 70.048 25.6343 69.9407 25.9143 69.726C26.1943 69.5113 26.3343 69.2407 26.3343 68.914C26.3343 68.578 26.185 68.3307 25.8863 68.172C25.5877 68.004 25.1257 67.8407 24.5003 67.682C23.931 67.5327 23.4643 67.3833 23.1003 67.234C22.7457 67.0753 22.4377 66.8467 22.1763 66.548C21.9243 66.24 21.7983 65.8387 21.7983 65.344C21.7983 64.952 21.915 64.5927 22.1483 64.266C22.3817 63.9393 22.713 63.6827 23.1423 63.496C23.5717 63.3 24.0617 63.202 24.6123 63.202C25.4617 63.202 26.1477 63.4167 26.6703 63.846C27.193 64.2753 27.473 64.8633 27.5103 65.61H26.2363C26.2083 65.2087 26.045 64.8867 25.7463 64.644C25.457 64.4013 25.065 64.28 24.5703 64.28C24.113 64.28 23.749 64.378 23.4783 64.574C23.2077 64.77 23.0723 65.0267 23.0723 65.344C23.0723 65.596 23.1517 65.806 23.3103 65.974C23.4783 66.1327 23.6837 66.2633 23.9263 66.366C24.1783 66.4593 24.5237 66.5667 24.9623 66.688C25.513 66.8373 25.961 66.9867 26.3063 67.136C26.6517 67.276 26.9457 67.4907 27.1883 67.78C27.4403 68.0693 27.571 68.4473 27.5803 68.914C27.5803 69.334 27.4637 69.712 27.2303 70.048C26.997 70.384 26.6657 70.65 26.2363 70.846C25.8163 71.0327 25.331 71.126 24.7803 71.126ZM33.6628 71L30.6528 67.612V71H29.3788V60.64H30.6528V66.73L33.6068 63.328H35.3848L31.7728 67.15L35.3988 71H33.6628ZM39.9299 71.126C39.2112 71.126 38.5579 70.9627 37.9699 70.636C37.3912 70.3093 36.9339 69.8473 36.5979 69.25C36.2712 68.6433 36.1079 67.9433 36.1079 67.15C36.1079 66.366 36.2759 65.6753 36.6119 65.078C36.9572 64.4713 37.4239 64.0093 38.0119 63.692C38.5999 63.3653 39.2579 63.202 39.9859 63.202C40.7139 63.202 41.3719 63.3653 41.9599 63.692C42.5479 64.0093 43.0099 64.4667 43.3459 65.064C43.6912 65.6613 43.8639 66.3567 43.8639 67.15C43.8639 67.9433 43.6865 68.6433 43.3319 69.25C42.9865 69.8473 42.5152 70.3093 41.9179 70.636C41.3205 70.9627 40.6579 71.126 39.9299 71.126ZM39.9299 70.006C40.3872 70.006 40.8165 69.8987 41.2179 69.684C41.6192 69.4693 41.9412 69.1473 42.1839 68.718C42.4359 68.2887 42.5619 67.766 42.5619 67.15C42.5619 66.534 42.4405 66.0113 42.1979 65.582C41.9552 65.1527 41.6379 64.8353 41.2459 64.63C40.8539 64.4153 40.4292 64.308 39.9719 64.308C39.5052 64.308 39.0759 64.4153 38.6839 64.63C38.3012 64.8353 37.9932 65.1527 37.7599 65.582C37.5265 66.0113 37.4099 66.534 37.4099 67.15C37.4099 67.7753 37.5219 68.3027 37.7459 68.732C37.9792 69.1613 38.2872 69.4833 38.6699 69.698C39.0525 69.9033 39.4725 70.006 39.9299 70.006ZM46.8129 64.742C47.0649 64.3033 47.4383 63.9393 47.9329 63.65C48.4369 63.3513 49.0203 63.202 49.6829 63.202C50.3643 63.202 50.9803 63.3653 51.5309 63.692C52.0909 64.0187 52.5296 64.4807 52.8469 65.078C53.1643 65.666 53.3229 66.352 53.3229 67.136C53.3229 67.9107 53.1643 68.6013 52.8469 69.208C52.5296 69.8147 52.0909 70.286 51.5309 70.622C50.9803 70.958 50.3643 71.126 49.6829 71.126C49.0296 71.126 48.4509 70.9813 47.9469 70.692C47.4523 70.3933 47.0743 70.0247 46.8129 69.586V74.64H45.5389V63.328H46.8129V64.742ZM52.0209 67.136C52.0209 66.5573 51.9043 66.0533 51.6709 65.624C51.4376 65.1947 51.1203 64.868 50.7189 64.644C50.3269 64.42 49.8929 64.308 49.4169 64.308C48.9503 64.308 48.5163 64.4247 48.1149 64.658C47.7229 64.882 47.4056 65.2133 47.1629 65.652C46.9296 66.0813 46.8129 66.5807 46.8129 67.15C46.8129 67.7287 46.9296 68.2373 47.1629 68.676C47.4056 69.1053 47.7229 69.4367 48.1149 69.67C48.5163 69.894 48.9503 70.006 49.4169 70.006C49.8929 70.006 50.3269 69.894 50.7189 69.67C51.1203 69.4367 51.4376 69.1053 51.6709 68.676C51.9043 68.2373 52.0209 67.724 52.0209 67.136Z"
                                        fill="#8B8B8B" />
                                    <path
                                        d="M25.4275 37.0006H10.6925C8.6625 37.0006 7 35.3731 7 33.3781V7.40812C7 2.82312 10.4125 0.74061 14.595 2.78811L22.365 6.60312C24.045 7.42562 25.4275 9.6131 25.4275 11.4681V37.0006Z"
                                        stroke="#8B8B8B" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M42.0002 24.8558V31.4708C42.0002 35.2508 40.2502 37.0008 36.4702 37.0008H25.4277V16.7358L26.2502 16.9108L34.1252 18.6783L37.6777 19.4658C39.9877 19.9733 41.8777 21.1633 41.9827 24.5233C42.0002 24.6283 42.0002 24.7333 42.0002 24.8558Z"
                                        stroke="#8B8B8B" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M13.1772 14.2505H19.2497" stroke="#8B8B8B" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.1772 21.2505H19.2497" stroke="#8B8B8B" stroke-width="3"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path
                                        d="M34.125 18.6779V24.3129C34.125 26.4829 32.3575 28.2504 30.1875 28.2504C28.0175 28.2504 26.25 26.4829 26.25 24.3129V16.9104L34.125 18.6779Z"
                                        stroke="#8B8B8B" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path
                                        d="M41.9825 24.523C41.8775 26.588 40.1625 28.2505 38.0625 28.2505C35.8925 28.2505 34.125 26.483 34.125 24.313V18.678L37.6775 19.4655C39.9875 19.973 41.8775 21.163 41.9825 24.523Z"
                                        stroke="#8B8B8B" stroke-width="3" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>

                            </a>
                    </li>
                    {{-- ICON TIKET --}}
                    <li class="text-center my-3 " style="width: 100%">
                        <a href="/cekTiket" class="nav-link text-white">
                            <svg width="33" height="57" viewBox="0 0 45 74" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M4.52276 25.2444C3.74337 25.5331 2.88194 25.6981 2 25.6981C2.18459 33.1025 4.37919 35 12.2346 35H32.7449C40.949 35 43 32.9375 43 24.6875V12.3125C43 4.0625 40.949 2 32.7449 2H12.2346C4.37919 2 2.18459 3.8975 2 11.2812C5.95847 11.2812 9.15807 14.5194 9.15807 18.5"
                                    stroke="#8B8B8B" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M16.3369 2V9.21875" stroke="#8B8B8B" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M16.3369 27.7812V35" stroke="#8B8B8B" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M28.3561 23.0578C28.11 22.9341 27.8023 22.9341 27.5562 23.0578L25.0335 24.3985C24.3976 24.7285 23.6798 24.1922 23.8029 23.491L24.2951 20.6653C24.3361 20.3766 24.2541 20.1085 24.049 19.9022L22.0185 17.9016C21.5057 17.4066 21.7929 16.5403 22.4902 16.4372L25.3206 16.0247C25.6078 15.9835 25.8334 15.8185 25.9564 15.5503L27.2075 12.9722C27.5152 12.3328 28.4177 12.3328 28.7253 12.9722L29.9969 15.5503C30.12 15.7978 30.3661 15.9835 30.6328 16.0247L33.4632 16.4372C34.1605 16.5403 34.4477 17.4066 33.9349 17.9016L31.8839 19.9022C31.6788 20.0878 31.5967 20.3766 31.6378 20.6653"
                                    stroke="#8B8B8B" stroke-width="3" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path
                                    d="M14.084 58.242V59.278H11.424V68H10.15V59.278H7.476V58.242H14.084ZM16.3102 59.082C16.0676 59.082 15.8622 58.998 15.6942 58.83C15.5262 58.662 15.4422 58.4567 15.4422 58.214C15.4422 57.9713 15.5262 57.766 15.6942 57.598C15.8622 57.43 16.0676 57.346 16.3102 57.346C16.5436 57.346 16.7396 57.43 16.8982 57.598C17.0662 57.766 17.1502 57.9713 17.1502 58.214C17.1502 58.4567 17.0662 58.662 16.8982 58.83C16.7396 58.998 16.5436 59.082 16.3102 59.082ZM16.9262 60.328V68H15.6522V60.328H16.9262ZM23.3815 68L20.3715 64.612V68H19.0975V57.64H20.3715V63.73L23.3255 60.328H25.1035L21.4915 64.15L25.1175 68H23.3815ZM33.3026 63.87C33.3026 64.1127 33.2886 64.3693 33.2606 64.64H27.1286C27.1753 65.396 27.4319 65.9887 27.8986 66.418C28.3746 66.838 28.9486 67.048 29.6206 67.048C30.1713 67.048 30.6286 66.922 30.9926 66.67C31.3659 66.4087 31.6273 66.0633 31.7766 65.634H33.1486C32.9433 66.3713 32.5326 66.9733 31.9166 67.44C31.3006 67.8973 30.5353 68.126 29.6206 68.126C28.8926 68.126 28.2393 67.9627 27.6606 67.636C27.0913 67.3093 26.6433 66.8473 26.3166 66.25C25.9899 65.6433 25.8266 64.9433 25.8266 64.15C25.8266 63.3567 25.9853 62.6613 26.3026 62.064C26.6199 61.4667 27.0633 61.0093 27.6326 60.692C28.2113 60.3653 28.8739 60.202 29.6206 60.202C30.3486 60.202 30.9926 60.3607 31.5526 60.678C32.1126 60.9953 32.5419 61.434 32.8406 61.994C33.1486 62.5447 33.3026 63.17 33.3026 63.87ZM31.9866 63.604C31.9866 63.1187 31.8793 62.7033 31.6646 62.358C31.4499 62.0033 31.1559 61.7373 30.7826 61.56C30.4186 61.3733 30.0126 61.28 29.5646 61.28C28.9206 61.28 28.3699 61.4853 27.9126 61.896C27.4646 62.3067 27.2079 62.876 27.1426 63.604H31.9866ZM36.5383 61.378V65.9C36.5383 66.2733 36.6176 66.5393 36.7763 66.698C36.9349 66.8473 37.2103 66.922 37.6022 66.922H38.5403V68H37.3923C36.6829 68 36.1509 67.8367 35.7963 67.51C35.4416 67.1833 35.2643 66.6467 35.2643 65.9V61.378H34.2703V60.328H35.2643V58.396H36.5383V60.328H38.5403V61.378H36.5383Z"
                                    fill="#8B8B8B" />
                            </svg>

                        </a>
                    </li>
                </ul>

            </div>
            <div class="d-block mb-4 ">
                <ul class="nav nav-pills d-flex justify-content-center "
                    style="height: 100%; align-content: flex-end;">
                    {{-- STRAIGHT LINE --}}
                    <li class="d-block text-center" style="width: 70%">
                        <hr style="border-color: #8B8B8B; border-width: 3px">
                    </li>
                    {{-- ICON KELUAR --}}
                    <li class="d-block" style="">

                        @auth
                            <div class="nav-link text-white">
                                <form action="/logout" class="hide-submit" method="post">
                                    @csrf
                                    <label>
                                        <input type="submit" />
                                        <svg width="35" height="61" viewBox="0 0 48 84" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" style="z-index: 1000000; cursor: pointer;">
                                            <path
                                                d="M26.3208 40.0809H26.0672C17.4031 40.0809 13.2272 36.666 12.5052 29.0167C12.4272 28.2167 13.0126 27.4947 13.8322 27.4166C14.6127 27.3386 15.3542 27.9435 15.4323 28.7435C15.9982 34.8708 18.8862 37.1539 26.0867 37.1539H26.3404C34.2824 37.1539 37.0923 34.3439 37.0923 26.4019V13.679C37.0923 5.73699 34.2824 2.92704 26.3404 2.92704H26.0867C18.8471 2.92704 15.9591 5.24915 15.4323 11.4935C15.3347 12.2936 14.6517 12.8985 13.8322 12.8204C13.0126 12.7619 12.4272 12.0399 12.4857 11.2398C13.1492 3.47342 17.3446 0 26.0672 0H26.3208C35.902 0 39.9999 4.09785 39.9999 13.679V26.4019C39.9999 35.9831 35.902 40.0809 26.3208 40.0809Z"
                                                fill="#8B8B8B" />
                                            <path
                                                d="M25.8501 21.504H3.64369C2.84364 21.504 2.18018 20.8405 2.18018 20.0405C2.18018 19.2404 2.84364 18.577 3.64369 18.577H25.8501C26.6501 18.577 27.3136 19.2404 27.3136 20.0405C27.3136 20.8405 26.6501 21.504 25.8501 21.504Z"
                                                fill="#8B8B8B" />
                                            <path
                                                d="M7.99569 28.0412C7.62493 28.0412 7.25417 27.9046 6.96147 27.6119L0.42442 21.0749C-0.141473 20.509 -0.141473 19.5723 0.42442 19.0064L6.96147 12.4694C7.52736 11.9035 8.46401 11.9035 9.02991 12.4694C9.5958 13.0353 9.5958 13.9719 9.02991 14.5378L3.52708 20.0407L9.02991 25.5435C9.5958 26.1094 9.5958 27.046 9.02991 27.6119C8.75672 27.9046 8.36645 28.0412 7.99569 28.0412Z"
                                                fill="#8B8B8B" />
                                            <path
                                                d="M9.37 78L5.352 73.548V78H4.078V68.242H5.352V72.764L9.384 68.242H10.994L6.57 73.128L11.036 78H9.37ZM19.4589 73.87C19.4589 74.1127 19.4449 74.3693 19.4169 74.64H13.2849C13.3315 75.396 13.5882 75.9887 14.0549 76.418C14.5309 76.838 15.1049 77.048 15.7769 77.048C16.3275 77.048 16.7849 76.922 17.1489 76.67C17.5222 76.4087 17.7835 76.0633 17.9329 75.634H19.3049C19.0995 76.3713 18.6889 76.9733 18.0729 77.44C17.4569 77.8973 16.6915 78.126 15.7769 78.126C15.0489 78.126 14.3955 77.9627 13.8169 77.636C13.2475 77.3093 12.7995 76.8473 12.4729 76.25C12.1462 75.6433 11.9829 74.9433 11.9829 74.15C11.9829 73.3567 12.1415 72.6613 12.4589 72.064C12.7762 71.4667 13.2195 71.0093 13.7889 70.692C14.3675 70.3653 15.0302 70.202 15.7769 70.202C16.5049 70.202 17.1489 70.3607 17.7089 70.678C18.2689 70.9953 18.6982 71.434 18.9969 71.994C19.3049 72.5447 19.4589 73.17 19.4589 73.87ZM18.1429 73.604C18.1429 73.1187 18.0355 72.7033 17.8209 72.358C17.6062 72.0033 17.3122 71.7373 16.9389 71.56C16.5749 71.3733 16.1689 71.28 15.7209 71.28C15.0769 71.28 14.5262 71.4853 14.0689 71.896C13.6209 72.3067 13.3642 72.876 13.2989 73.604H18.1429ZM22.4145 67.64V78H21.1405V67.64H22.4145ZM31.3898 70.328V78H30.1158V76.866C29.8731 77.258 29.5325 77.566 29.0938 77.79C28.6645 78.0047 28.1885 78.112 27.6658 78.112C27.0685 78.112 26.5318 77.9907 26.0558 77.748C25.5798 77.496 25.2018 77.1227 24.9218 76.628C24.6511 76.1333 24.5158 75.5313 24.5158 74.822V70.328H25.7758V74.654C25.7758 75.41 25.9671 75.9933 26.3498 76.404C26.7325 76.8053 27.2551 77.006 27.9178 77.006C28.5991 77.006 29.1358 76.796 29.5278 76.376C29.9198 75.956 30.1158 75.3447 30.1158 74.542V70.328H31.3898ZM33.0649 74.136C33.0649 73.352 33.2236 72.666 33.5409 72.078C33.8582 71.4807 34.2922 71.0187 34.8429 70.692C35.4029 70.3653 36.0236 70.202 36.7049 70.202C37.3769 70.202 37.9602 70.3467 38.4549 70.636C38.9496 70.9253 39.3182 71.2893 39.5609 71.728V70.328H40.8489V78H39.5609V76.572C39.3089 77.02 38.9309 77.3933 38.4269 77.692C37.9322 77.9813 37.3536 78.126 36.6909 78.126C36.0096 78.126 35.3936 77.958 34.8429 77.622C34.2922 77.286 33.8582 76.8147 33.5409 76.208C33.2236 75.6013 33.0649 74.9107 33.0649 74.136ZM39.5609 74.15C39.5609 73.5713 39.4442 73.0673 39.2109 72.638C38.9776 72.2087 38.6602 71.882 38.2589 71.658C37.8669 71.4247 37.4329 71.308 36.9569 71.308C36.4809 71.308 36.0469 71.42 35.6549 71.644C35.2629 71.868 34.9502 72.1947 34.7169 72.624C34.4836 73.0533 34.3669 73.5573 34.3669 74.136C34.3669 74.724 34.4836 75.2373 34.7169 75.676C34.9502 76.1053 35.2629 76.4367 35.6549 76.67C36.0469 76.894 36.4809 77.006 36.9569 77.006C37.4329 77.006 37.8669 76.894 38.2589 76.67C38.6602 76.4367 38.9776 76.1053 39.2109 75.676C39.4442 75.2373 39.5609 74.7287 39.5609 74.15ZM44.2758 71.574C44.4998 71.1353 44.8172 70.7947 45.2278 70.552C45.6478 70.3093 46.1565 70.188 46.7538 70.188V71.504H46.4178C44.9898 71.504 44.2758 72.2787 44.2758 73.828V78H43.0018V70.328H44.2758V71.574Z"
                                                fill="#8B8B8B" />

                                        </svg>
                                    </label>
                                </form>
                            </div>
                        @else
                            <a href="/login" class="nav-link text-white">
                                <svg width="35" height="61" viewBox="0 0 47 84" fill="none" style=""
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.321 40.0809H22.0673C13.4033 40.0809 9.22736 36.666 8.50535 29.0167C8.4273 28.2167 9.01271 27.4947 9.83228 27.4166C10.6128 27.3386 11.3543 27.9435 11.4324 28.7435C11.9983 34.8708 14.8863 37.1539 22.0868 37.1539H22.3405C30.2825 37.1539 33.0925 34.3439 33.0925 26.4019V13.679C33.0925 5.73699 30.2825 2.92704 22.3405 2.92704H22.0868C14.8473 2.92704 11.9593 5.24915 11.4324 11.4935C11.3348 12.2936 10.6518 12.8985 9.83228 12.8204C9.01271 12.7619 8.4273 12.0399 8.48584 11.2398C9.1493 3.47342 13.3447 0 22.0673 0H22.321C31.9021 0 36 4.09785 36 13.679V26.4019C36 35.9831 31.9021 40.0809 22.321 40.0809Z"
                                        fill="#8B8B8B" />
                                    <path
                                        d="M23.6699 21.504H1.46352C0.663462 21.504 0 20.8405 0 20.0405C0 19.2404 0.663462 18.577 1.46352 18.577H23.6699C24.4699 18.577 25.1334 19.2404 25.1334 20.0405C25.1334 20.8405 24.4699 21.504 23.6699 21.504Z"
                                        fill="#8B8B8B" />
                                    <path
                                        d="M20.0043 12.045C20.3751 12.045 20.7458 12.1816 21.0385 12.4743L27.5756 19.0113C28.1415 19.5772 28.1415 20.5139 27.5756 21.0798L21.0385 27.6168C20.4726 28.1827 19.536 28.1827 18.9701 27.6168C18.4042 27.0509 18.4042 26.1143 18.9701 25.5484L24.4729 20.0456L18.9701 14.5427C18.4042 13.9768 18.4042 13.0402 18.9701 12.4743C19.2433 12.1816 19.6336 12.045 20.0043 12.045Z"
                                        fill="#8B8B8B" />
                                    <path
                                        d="M12.976 68.312V78H11.702V70.776L8.482 78H7.586L4.352 70.762V78H3.078V68.312H4.45L8.034 76.32L11.618 68.312H12.976ZM14.6606 74.136C14.6606 73.352 14.8193 72.666 15.1366 72.078C15.4539 71.4807 15.8879 71.0187 16.4386 70.692C16.9986 70.3653 17.6193 70.202 18.3006 70.202C18.9726 70.202 19.5559 70.3467 20.0506 70.636C20.5453 70.9253 20.9139 71.2893 21.1566 71.728V70.328H22.4446V78H21.1566V76.572C20.9046 77.02 20.5266 77.3933 20.0226 77.692C19.5279 77.9813 18.9493 78.126 18.2866 78.126C17.6053 78.126 16.9893 77.958 16.4386 77.622C15.8879 77.286 15.4539 76.8147 15.1366 76.208C14.8193 75.6013 14.6606 74.9107 14.6606 74.136ZM21.1566 74.15C21.1566 73.5713 21.0399 73.0673 20.8066 72.638C20.5733 72.2087 20.2559 71.882 19.8546 71.658C19.4626 71.4247 19.0286 71.308 18.5526 71.308C18.0766 71.308 17.6426 71.42 17.2506 71.644C16.8586 71.868 16.5459 72.1947 16.3126 72.624C16.0793 73.0533 15.9626 73.5573 15.9626 74.136C15.9626 74.724 16.0793 75.2373 16.3126 75.676C16.5459 76.1053 16.8586 76.4367 17.2506 76.67C17.6426 76.894 18.0766 77.006 18.5526 77.006C19.0286 77.006 19.4626 76.894 19.8546 76.67C20.2559 76.4367 20.5733 76.1053 20.8066 75.676C21.0399 75.2373 21.1566 74.7287 21.1566 74.15ZM27.3135 78.126C26.7255 78.126 26.1982 78.028 25.7315 77.832C25.2649 77.6267 24.8962 77.3467 24.6255 76.992C24.3549 76.628 24.2055 76.2127 24.1775 75.746H25.4935C25.5309 76.1287 25.7082 76.4413 26.0255 76.684C26.3522 76.9267 26.7769 77.048 27.2995 77.048C27.7849 77.048 28.1675 76.9407 28.4475 76.726C28.7275 76.5113 28.8675 76.2407 28.8675 75.914C28.8675 75.578 28.7182 75.3307 28.4195 75.172C28.1209 75.004 27.6589 74.8407 27.0335 74.682C26.4642 74.5327 25.9975 74.3833 25.6335 74.234C25.2789 74.0753 24.9709 73.8467 24.7095 73.548C24.4575 73.24 24.3315 72.8387 24.3315 72.344C24.3315 71.952 24.4482 71.5927 24.6815 71.266C24.9149 70.9393 25.2462 70.6827 25.6755 70.496C26.1049 70.3 26.5949 70.202 27.1455 70.202C27.9949 70.202 28.6809 70.4167 29.2035 70.846C29.7262 71.2753 30.0062 71.8633 30.0435 72.61H28.7695C28.7415 72.2087 28.5782 71.8867 28.2795 71.644C27.9902 71.4013 27.5982 71.28 27.1035 71.28C26.6462 71.28 26.2822 71.378 26.0115 71.574C25.7409 71.77 25.6055 72.0267 25.6055 72.344C25.6055 72.596 25.6849 72.806 25.8435 72.974C26.0115 73.1327 26.2169 73.2633 26.4595 73.366C26.7115 73.4593 27.0569 73.5667 27.4955 73.688C28.0462 73.8373 28.4942 73.9867 28.8395 74.136C29.1849 74.276 29.4789 74.4907 29.7215 74.78C29.9735 75.0693 30.1042 75.4473 30.1135 75.914C30.1135 76.334 29.9969 76.712 29.7635 77.048C29.5302 77.384 29.1989 77.65 28.7695 77.846C28.3495 78.0327 27.8642 78.126 27.3135 78.126ZM38.716 70.328V78H37.442V76.866C37.1993 77.258 36.8587 77.566 36.42 77.79C35.9907 78.0047 35.5147 78.112 34.992 78.112C34.3947 78.112 33.858 77.9907 33.382 77.748C32.906 77.496 32.528 77.1227 32.248 76.628C31.9773 76.1333 31.842 75.5313 31.842 74.822V70.328H33.102V74.654C33.102 75.41 33.2933 75.9933 33.676 76.404C34.0587 76.8053 34.5813 77.006 35.244 77.006C35.9253 77.006 36.462 76.796 36.854 76.376C37.246 75.956 37.442 75.3447 37.442 74.542V70.328H38.716ZM45.1511 78L42.1411 74.612V78H40.8671V67.64H42.1411V73.73L45.0951 70.328H46.8731L43.2611 74.15L46.8871 78H45.1511Z"
                                        fill="#8B8B8B" />

                                </svg>
                            </a>




                        @endauth


                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
