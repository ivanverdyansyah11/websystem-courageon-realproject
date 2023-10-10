@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="detail-prestasi-wrapper container">
            <div class="row gy-5">
                <div class="col-lg-8 col-12">
                    <div class="prestasi-detail-section">
                        <div class="header-article">
                            <img src="{{ asset('assets/img/humas-images/berita-image/' . $berita->banner) }}"
                                alt="{{ $berita->title }}" class="img-detail">
                            <h2 class="fs-2 fw-bold text-black mt-4">
                                {{ $berita->title }}
                            </h2>
                        </div>
                        <div class="mt-4 d-flex flex-column gap-4">
                            <div class="d-flex flex-row align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="18" viewBox="0 0 15 18"
                                    fill="none">
                                    <path
                                        d="M7.62927 0.441692C7.85758 0.48776 8.09019 0.525451 8.31419 0.575707C9.87357 0.931689 11.2046 2.37656 11.4157 3.92613C11.5536 4.94382 11.4028 5.90706 10.8083 6.76979C10.02 7.91313 8.9345 8.57902 7.49573 8.67535C5.60466 8.80099 4.05389 7.72047 3.34744 6.25048C2.68405 4.87262 2.95113 3.03826 3.99359 1.89493C4.63112 1.19553 5.39789 0.709722 6.34989 0.52126C6.51358 0.487756 6.67296 0.462628 6.83666 0.4375C7.10373 0.441688 7.3665 0.441692 7.62927 0.441692Z"
                                        fill="#232323" fill-opacity="0.46" />
                                    <path
                                        d="M7.33633 17.5624C5.94495 17.5624 4.54926 17.5624 3.15788 17.5624C2.44281 17.5624 1.77081 17.4242 1.17635 17.0138C0.50435 16.5447 0.108043 15.9039 0.0391205 15.1124C-0.0858023 13.6968 0.0821974 12.3064 0.63358 10.983C0.960964 10.1957 1.44773 9.51301 2.24896 9.0984C2.74865 8.83874 3.28711 8.7131 3.85142 8.72147C4.02803 8.72566 4.21757 8.80942 4.37695 8.89318C4.64403 9.03558 4.88957 9.21148 5.14803 9.36224C6.61695 10.2375 8.08587 10.2375 9.55048 9.35387C9.75294 9.23241 9.96402 9.11096 10.1536 8.97276C10.5068 8.71729 10.8902 8.67959 11.3123 8.74241C12.4539 8.90575 13.2637 9.51301 13.8065 10.4804C14.2932 11.3474 14.5129 12.2855 14.6077 13.2571C14.6594 13.7513 14.6809 14.2455 14.6766 14.7397C14.6594 16.2641 13.604 17.3697 12.0446 17.5289C11.8551 17.5498 11.6655 17.5582 11.4803 17.5582C10.0976 17.5624 8.71479 17.5624 7.33633 17.5624Z"
                                        fill="#232323" fill-opacity="0.46" />
                                </svg>
                                <p class="desc d-md-flex d-none">Penulis:</p>
                                <p class="desc">{{ $berita->author }}</p>
                            </div>
                            <div class="d-flex flex-row align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="18" viewBox="0 0 19 18"
                                    fill="none">
                                    <path
                                        d="M0.00503766 5.42578C6.09566 5.42578 12.151 5.42578 18.2316 5.42578C18.2316 5.5215 18.2316 5.60714 18.2316 5.69278C18.2316 8.99754 18.2316 12.3023 18.2316 15.6121C18.2316 16.5844 17.5817 17.335 16.6195 17.4861C16.4784 17.5063 16.3323 17.5214 16.1862 17.5214C11.3399 17.5214 6.49364 17.5214 1.64734 17.5214C0.670019 17.5214 0.0503773 16.9219 0.00503766 15.9395C-7.69448e-08 15.864 0 15.7884 0 15.7128C0 12.3577 0 9.00257 0 5.6424C0.00503774 5.57188 0.00503766 5.50639 0.00503766 5.42578ZM14.5994 8.71038C14.5994 8.48369 14.5994 8.25699 14.5994 8.03533C14.5994 8.02526 14.5994 8.01014 14.5994 8.00006C14.5893 7.70788 14.418 7.53156 14.1258 7.53156C13.6674 7.52652 13.2089 7.52652 12.7505 7.53156C12.4583 7.53156 12.277 7.6978 12.2719 7.99503C12.2619 8.4585 12.2619 8.92197 12.2719 9.38544C12.277 9.66755 12.4382 9.84388 12.7152 9.84892C13.2039 9.86403 13.6926 9.86403 14.1812 9.84387C14.4633 9.8338 14.5893 9.67763 14.5943 9.39048C14.6044 9.15874 14.5994 8.93204 14.5994 8.71038ZM8.88657 14.9572C9.1183 14.9572 9.35004 14.9622 9.58177 14.9572C9.89411 14.9521 10.0503 14.8161 10.0553 14.4987C10.0654 14.0353 10.0654 13.5718 10.0553 13.1083C10.0503 12.8111 9.879 12.6398 9.58177 12.6348C9.1183 12.6247 8.65483 12.6247 8.19136 12.6348C7.89413 12.6398 7.73292 12.8161 7.73292 13.1184C7.72789 13.5718 7.72789 14.0202 7.73292 14.4736C7.73292 14.7859 7.90925 14.9572 8.22662 14.9622C8.44828 14.9572 8.66491 14.9572 8.88657 14.9572ZM14.5994 13.8035C14.5994 13.5718 14.6044 13.3401 14.5994 13.1083C14.5943 12.8212 14.4331 12.6398 14.151 12.6348C13.6724 12.6247 13.1989 12.6247 12.7203 12.6348C12.4583 12.6398 12.287 12.801 12.282 13.058C12.2669 13.5517 12.2669 14.0504 12.282 14.5441C12.2921 14.796 12.4734 14.9521 12.7304 14.9572C13.2089 14.9622 13.6825 14.9622 14.1611 14.9572C14.4382 14.9521 14.5893 14.796 14.5994 14.5239C14.6044 14.2821 14.5994 14.0403 14.5994 13.8035ZM7.73292 8.67512C7.73292 8.90182 7.73292 9.12852 7.73292 9.35018C7.73796 9.65748 7.89413 9.83884 8.20143 9.84387C8.66994 9.85395 9.14349 9.85395 9.612 9.84387C9.89915 9.8338 10.0452 9.69778 10.0503 9.41063C10.0654 8.92701 10.0654 8.44339 10.0503 7.9648C10.0452 7.68773 9.86389 7.52652 9.58681 7.52652C9.12334 7.52148 8.65987 7.52148 8.1964 7.52652C7.90421 7.53155 7.73796 7.70284 7.72789 8.00006C7.72789 8.22172 7.73292 8.44842 7.73292 8.67512ZM3.24934 13.7935C3.24934 14.0202 3.2443 14.2469 3.24934 14.4736C3.25438 14.7809 3.42566 14.9572 3.72793 14.9572C4.16621 14.9622 4.60449 14.9622 5.04781 14.9572C5.36015 14.9521 5.5667 14.7708 5.57677 14.4635C5.59189 14 5.58685 13.5365 5.57677 13.0731C5.5667 12.8061 5.39542 12.6398 5.12842 12.6348C4.64983 12.6247 4.17628 12.6247 3.6977 12.6348C3.41559 12.6398 3.25942 12.8262 3.25438 13.1134C3.2443 13.3401 3.24934 13.5668 3.24934 13.7935ZM4.41306 7.52148C4.1914 7.52148 3.97477 7.52148 3.75311 7.52148C3.74304 7.52148 3.72792 7.52148 3.71785 7.52148C3.42566 7.53155 3.25438 7.70284 3.24934 7.99503C3.2443 8.45346 3.2443 8.9119 3.24934 9.37033C3.24934 9.64741 3.40551 9.8338 3.68259 9.83884C4.15109 9.85395 4.62464 9.85395 5.09315 9.83884C5.37526 9.82876 5.5667 9.64237 5.57174 9.35522C5.58685 8.88671 5.58181 8.41316 5.5667 7.94465C5.55662 7.67765 5.37526 7.52652 5.10826 7.52148C4.87653 7.52148 4.64479 7.52148 4.41306 7.52148Z"
                                        fill="#9A9A9A" />
                                    <path
                                        d="M18.1759 4.21805C12.1155 4.21805 6.06521 4.21805 0.0350385 4.21805C0.0350385 3.42209 -0.000225812 2.6362 0.0451138 1.85535C0.080378 1.20045 0.614378 0.439749 1.62193 0.480051C2.07532 0.495164 2.52872 0.485091 2.97708 0.485091C3.03753 0.485091 3.09798 0.485091 3.18362 0.485091C3.18362 0.636223 3.18362 0.767203 3.18362 0.893146C3.18362 1.29113 3.18362 1.68407 3.18362 2.08205C3.18362 2.49515 3.40528 2.75207 3.75793 2.75207C4.10049 2.75207 4.32215 2.50018 4.32215 2.09213C4.32215 1.63369 4.32215 1.17526 4.32215 0.716825C4.32215 0.646297 4.32215 0.580807 4.32215 0.500203C7.34983 0.500203 10.3624 0.500203 13.3951 0.500203C13.4002 0.565694 13.4052 0.636222 13.4052 0.701713C13.4052 1.19037 13.4002 1.68407 13.4102 2.17273C13.4153 2.45485 13.5765 2.66643 13.8233 2.73696C14.05 2.80245 14.317 2.72184 14.4329 2.51026C14.5034 2.39439 14.5336 2.23822 14.5387 2.1022C14.5538 1.63873 14.5437 1.17022 14.5437 0.706749C14.5437 0.641259 14.5437 0.570732 14.5437 0.485091C15.1079 0.485091 15.647 0.469976 16.181 0.490127C16.448 0.500203 16.7251 0.545542 16.9669 0.641259C17.5815 0.883071 18.0248 1.30624 18.1558 1.99137C18.1608 2.0216 18.1658 2.05183 18.1658 2.08709C18.1759 2.78734 18.1759 3.49766 18.1759 4.21805Z"
                                        fill="#9A9A9A" />
                                </svg>
                                <p class="desc d-md-flex d-none">Tanggal Pelaksanaan :</p>
                                <p class="desc text-capitalize">{{ $berita->created_date }}</p>
                            </div>
                        </div>
                        <article class="mt-4 article-content desc">
                            <p>
                                <span class="fw-bold">Deskripsi :</span> {!! $berita->description !!}
                            </p>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="ms-xl-3">
                        <p class="text-black fs-3 fw-bold text-capitalize">Berita Lainnya :</p>
                        <form action="{{ route('berita-cari') }}" method="POST"
                            class="mt-3 input-wrapper long-searchbar d-flex justify-content-between gap-3">
                            @csrf
                            <input type="search" class="input-text w-100 desc" name="search" placeholder="Cari berita">
                            <button class="btn btn-color btn-input">cari</button>
                        </form>
                        <div class="mt-5 d-flex flex-column gap-4 other-p5-wrapper">
                            @foreach ($rekomendasi as $rekomen)
                                <a href="{{ route('detail-berita-homepage', $rekomen->id) }}"
                                    class="d-flex gap-3 align-items-center">
                                    <div class="image-wrapper position-relative">
                                        <div class="position-relative">
                                            <img src="{{ asset('assets/img/humas-images/berita-image/' . $rekomen->banner) }}"
                                                alt="{{ $rekomen->title }}" class="w-100 img-detail-rectangle">
                                        </div>
                                    </div>
                                    <div>
                                        <p class="text-start fw-semibold text-capitalize fs-18">
                                            {{ Str::limit($rekomen->title, 36) }}</p>
                                        <div class="d-flex flex-row mt-2 gap-2 align-items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                viewBox="0 0 16 16" fill="none">
                                                <path
                                                    d="M0.00415094 5.05469C5.02272 5.05469 10.0122 5.05469 15.0225 5.05469C15.0225 5.13356 15.0225 5.20412 15.0225 5.27469C15.0225 7.99775 15.0225 10.7208 15.0225 13.448C15.0225 14.2492 14.487 14.8677 13.6942 14.9922C13.5779 15.0088 13.4576 15.0213 13.3372 15.0213C9.34392 15.0213 5.35065 15.0213 1.35738 15.0213C0.552084 15.0213 0.04151 14.5273 0.00415094 13.7178C-6.34012e-08 13.6556 0 13.5933 0 13.531C0 10.7665 0 8.0019 0 5.23318C0.00415101 5.17507 0.00415094 5.1211 0.00415094 5.05469ZM12.0296 7.76114C12.0296 7.57435 12.0296 7.38756 12.0296 7.20491C12.0296 7.19661 12.0296 7.18415 12.0296 7.17585C12.0213 6.93509 11.8802 6.78981 11.6394 6.78981C11.2617 6.78566 10.8839 6.78566 10.5062 6.78981C10.2654 6.78981 10.116 6.92679 10.1119 7.1717C10.1036 7.55359 10.1036 7.93549 10.1119 8.31738C10.116 8.54983 10.2488 8.69512 10.4771 8.69927C10.8798 8.71173 11.2824 8.71172 11.6851 8.69512C11.9175 8.68682 12.0213 8.55814 12.0255 8.32153C12.0338 8.13058 12.0296 7.94379 12.0296 7.76114ZM7.32238 12.9084C7.51332 12.9084 7.70427 12.9125 7.89522 12.9084C8.15258 12.9042 8.28126 12.7922 8.28541 12.5307C8.29371 12.1488 8.29371 11.7669 8.28541 11.385C8.28126 11.1401 8.14012 10.9989 7.89522 10.9948C7.51332 10.9865 7.13143 10.9865 6.74954 10.9948C6.50463 10.9989 6.3718 11.1442 6.3718 11.3933C6.36764 11.7669 6.36764 12.1363 6.3718 12.5099C6.3718 12.7673 6.51708 12.9084 6.77859 12.9125C6.96124 12.9084 7.13973 12.9084 7.32238 12.9084ZM12.0296 11.9578C12.0296 11.7669 12.0338 11.5759 12.0296 11.385C12.0255 11.1484 11.8926 10.9989 11.6602 10.9948C11.2658 10.9865 10.8756 10.9865 10.4813 10.9948C10.2654 10.9989 10.1243 11.1318 10.1202 11.3435C10.1077 11.7503 10.1077 12.1612 10.1202 12.568C10.1285 12.7756 10.2779 12.9042 10.4896 12.9084C10.8839 12.9125 11.2741 12.9125 11.6685 12.9084C11.8968 12.9042 12.0213 12.7756 12.0296 12.5514C12.0338 12.3522 12.0296 12.1529 12.0296 11.9578ZM6.3718 7.73209C6.3718 7.91888 6.3718 8.10568 6.3718 8.28832C6.37595 8.54153 6.50463 8.69097 6.75784 8.69512C7.14388 8.70342 7.53408 8.70342 7.92012 8.69512C8.15673 8.68682 8.27711 8.57474 8.28126 8.33813C8.29371 7.93964 8.29371 7.54114 8.28126 7.1468C8.27711 6.91849 8.12767 6.78566 7.89937 6.78566C7.51747 6.7815 7.13558 6.7815 6.75369 6.78566C6.51293 6.78981 6.37595 6.93094 6.36764 7.17585C6.36764 7.3585 6.3718 7.54529 6.3718 7.73209ZM2.6774 11.9495C2.6774 12.1363 2.67325 12.3231 2.6774 12.5099C2.68155 12.7631 2.82269 12.9084 3.07175 12.9084C3.43288 12.9125 3.79402 12.9125 4.15931 12.9084C4.41667 12.9042 4.58686 12.7548 4.59517 12.5016C4.60762 12.1197 4.60347 11.7378 4.59517 11.3559C4.58686 11.1359 4.44573 10.9989 4.22573 10.9948C3.83138 10.9865 3.44118 10.9865 3.04684 10.9948C2.81438 10.9989 2.6857 11.1525 2.68155 11.3891C2.67325 11.5759 2.6774 11.7627 2.6774 11.9495ZM3.63628 6.78151C3.45364 6.78151 3.27515 6.78151 3.0925 6.78151C3.0842 6.78151 3.07175 6.78151 3.06344 6.78151C2.82268 6.78981 2.68155 6.93094 2.6774 7.1717C2.67325 7.54944 2.67325 7.92719 2.6774 8.30493C2.6774 8.53323 2.80608 8.68682 3.03439 8.69097C3.42043 8.70342 3.81062 8.70342 4.19667 8.69097C4.42912 8.68267 4.58686 8.52908 4.59101 8.29247C4.60347 7.90643 4.59932 7.51623 4.58686 7.13019C4.57856 6.91019 4.42912 6.78566 4.20912 6.78151C4.01818 6.78151 3.82723 6.78151 3.63628 6.78151Z"
                                                    fill="#A5A5A5" />
                                                <path
                                                    d="M14.9761 4.05885C9.98246 4.05885 4.9971 4.05885 0.0283441 4.05885C0.0283441 3.40299 -0.000713028 2.75543 0.036646 2.11203C0.0657031 1.5724 0.50571 0.945596 1.33591 0.978804C1.7095 0.991257 2.08309 0.982957 2.45253 0.982957C2.50234 0.982957 2.55216 0.982957 2.62272 0.982957C2.62272 1.10749 2.62272 1.21541 2.62272 1.31919C2.62272 1.64712 2.62272 1.97089 2.62272 2.29882C2.62272 2.63921 2.80537 2.85091 3.09594 2.85091C3.37821 2.85091 3.56085 2.64336 3.56085 2.30713C3.56085 1.92939 3.56085 1.55164 3.56085 1.1739C3.56085 1.11579 3.56085 1.06183 3.56085 0.995409C6.05561 0.995409 8.53791 0.995409 11.0368 0.995409C11.041 1.04937 11.0451 1.10749 11.0451 1.16145C11.0451 1.5641 11.041 1.9709 11.0493 2.37354C11.0534 2.606 11.1863 2.78034 11.3897 2.83846C11.5764 2.89242 11.7964 2.826 11.8919 2.65166C11.95 2.55619 11.9749 2.42751 11.9791 2.31543C11.9915 1.93354 11.9832 1.54749 11.9832 1.1656C11.9832 1.11164 11.9832 1.05352 11.9832 0.982957C12.4482 0.982957 12.8923 0.970503 13.3323 0.987107C13.5523 0.995409 13.7806 1.03277 13.9799 1.11164C14.4863 1.31089 14.8516 1.65957 14.9595 2.22411C14.9637 2.24901 14.9678 2.27392 14.9678 2.30298C14.9761 2.87997 14.9761 3.46526 14.9761 4.05885Z"
                                                    fill="#A5A5A5" />
                                            </svg>
                                            <p class="desc fs-14">{{ $rekomen->created_date }}</p>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
