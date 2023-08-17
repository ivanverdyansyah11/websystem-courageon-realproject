@extends('templates.main')

@section('container')
    <main class="mt-3">
        <section class="detail-prestasi-wrapper container">
            <div class="row gy-5">
                <div class="col-lg-8 col-12">
                    <div class="prestasi-detail-section">
                        <div class="header-article">
                            <img src="../img/prestasi1.png"
                                alt="gambar Prestasi Siswa : Juara 1 Pada Olimpiade Fisika tingkat Regional, Rizky Putra"
                                class="img-detail">
                            <h2 class="fs-2 fw-bold text-black mt-4">Prestasi Siswa : Juara 1 Pada Olimpiade Fisika tingkat
                                Regional, Rizky Putra</h2>
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
                                <p class="desc">Nama siswa :</p>
                                <p class="desc">Rizky Putra</p>
                            </div>
                            <div class="d-flex flex-row align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                                    fill="none">
                                    <path
                                        d="M19.4404 9.19228C19.3228 9.48069 19.2469 9.79947 19.0761 10.0499C18.727 10.5698 18.1919 10.7824 17.5733 10.7861C16.7271 10.7899 15.877 10.7861 15.0307 10.7861C14.9624 10.7861 14.8941 10.7861 14.7955 10.7861C14.8182 10.8658 14.8372 10.9304 14.86 10.9911C15.5468 12.8582 16.2337 14.7253 16.913 16.5924C16.9662 16.7404 16.9927 16.915 16.9699 17.0668C16.9396 17.302 16.7347 17.4652 16.4918 17.4842C16.2603 17.507 16.0705 17.4159 15.9491 17.211C15.8998 17.1313 15.8656 17.0402 15.8353 16.9529C15.1066 14.9606 14.3742 12.972 13.6456 10.9797C13.5925 10.8317 13.5242 10.7824 13.3648 10.7786C13.2092 10.7786 13.1485 10.8317 13.0991 10.9721C12.3705 12.9834 11.6419 14.9947 10.9019 17.006C10.8487 17.1502 10.7463 17.2982 10.6248 17.3969C10.4541 17.5411 10.1846 17.5146 10.0063 17.3855C9.81271 17.2489 9.71405 17.0098 9.78995 16.7859C9.99487 16.1901 10.2112 15.5943 10.4275 15.0023C10.9132 13.6665 11.399 12.3307 11.8847 10.9987C11.9075 10.9342 11.9265 10.8696 11.9531 10.7861C11.6798 10.7861 11.4218 10.7861 11.1865 10.7861C11.2055 10.4598 11.2168 10.1448 11.2396 9.83362C11.2434 9.7729 11.2776 9.71598 11.3041 9.65906C11.6798 8.90766 12.0555 8.15626 12.4274 7.40487C12.7538 6.74835 12.7272 6.11459 12.2832 5.515C11.6153 4.60801 10.1315 4.64975 9.53948 5.60607C9.27004 6.04629 9.05752 6.52065 8.81844 6.97984C8.78808 7.04056 8.75773 7.10507 8.71978 7.17717C8.67803 7.16199 8.63629 7.15061 8.60213 7.13163C8.22264 6.94568 7.84694 6.75214 7.46365 6.56998C7.36878 6.52445 7.32324 6.47132 7.32324 6.35747C7.32704 5.01027 7.31945 3.66307 7.33083 2.31587C7.33842 1.27227 8.1012 0.509487 9.1486 0.505692C11.9682 0.498103 14.7879 0.498103 17.6113 0.505692C18.5562 0.509487 19.2431 1.10908 19.4139 2.04643C19.4177 2.06541 19.4291 2.08059 19.4404 2.09577C19.4404 4.46001 19.4404 6.82425 19.4404 9.19228ZM13.3686 4.07292C13.5773 4.07292 13.786 4.07292 13.9947 4.07292C14.8106 4.07292 15.6265 4.07672 16.4425 4.06913C16.7536 4.06533 16.9813 3.83764 17.0003 3.53404C17.0193 3.24183 16.803 2.98758 16.4994 2.94204C16.4235 2.93065 16.3476 2.93065 16.2717 2.93065C14.4843 2.93065 12.6931 2.93065 10.9057 2.93065C10.7235 2.93065 10.5375 2.92686 10.3554 2.93065C10.0973 2.93824 9.90379 3.05588 9.80892 3.29496C9.65712 3.67825 9.93415 4.06154 10.3744 4.06533C11.3724 4.07672 12.3705 4.07292 13.3686 4.07292ZM15.1522 7.21133C14.7499 7.21133 14.3439 7.21133 13.9416 7.21133C13.5659 7.21512 13.3154 7.43902 13.3116 7.76918C13.3078 8.09934 13.5583 8.34222 13.9264 8.34601C14.7461 8.3498 15.5658 8.3498 16.3893 8.34601C16.7536 8.34222 17.0117 8.08796 17.0003 7.76159C16.9927 7.43523 16.7422 7.21133 16.3817 7.20753C15.9757 7.20753 15.5658 7.21133 15.1522 7.21133ZM15.1522 5.08237C15.1522 5.07858 15.1522 5.07858 15.1522 5.07479C14.7423 5.07479 14.3287 5.0672 13.9188 5.07479C13.5545 5.08238 13.3116 5.31386 13.3116 5.64023C13.3116 5.96659 13.5545 6.19808 13.915 6.20947C14.1503 6.21706 14.3818 6.20947 14.6171 6.20947C15.1939 6.20947 15.767 6.22085 16.3438 6.20188C16.5032 6.19808 16.6853 6.14116 16.8106 6.04629C16.9965 5.90967 17.0421 5.68956 16.9662 5.46187C16.8903 5.23038 16.7233 5.08617 16.4766 5.07858C16.0402 5.07478 15.5962 5.08237 15.1522 5.08237Z"
                                        fill="#9A9A9A" />
                                    <path
                                        d="M0.0113855 9.83876C0.034155 9.7363 0.0607191 9.63384 0.0796937 9.53137C0.352928 8.04376 1.59766 6.85215 3.10046 6.64723C3.18774 6.63584 3.27502 6.61687 3.40784 6.5941C2.70199 6.49923 2.14793 6.21461 1.7191 5.6947C1.29407 5.17859 1.10432 4.57899 1.15745 3.91488C1.25612 2.70051 2.23901 1.729 3.44579 1.64552C4.66776 1.56203 5.75311 2.37794 6.04532 3.55436C6.29958 4.5752 5.76449 6.25635 3.99985 6.60169C4.77402 6.55615 5.4571 6.82939 6.12881 7.16713C7.11169 7.66047 8.09458 8.14623 9.08126 8.63577C9.1268 8.65854 9.17234 8.67751 9.22926 8.70408C9.2748 8.613 9.32034 8.53331 9.36208 8.44982C9.71501 7.74396 10.0679 7.03811 10.4209 6.33225C10.5499 6.0742 10.7548 5.96794 11.0205 5.9983C11.2406 6.02486 11.4569 6.18425 11.4797 6.41194C11.4986 6.57133 11.4683 6.75349 11.4 6.8977C10.9825 7.76294 10.5423 8.6168 10.1211 9.47825C10.0755 9.57312 10.0604 9.69456 10.0755 9.80081C10.1628 10.3587 9.99204 10.8292 9.5746 11.2011C9.13439 11.5958 8.60689 11.721 8.06042 11.5085C7.52534 11.2998 7.02061 11.019 6.5045 10.7685C6.3565 10.6964 6.21229 10.6243 6.03393 10.537C6.03014 10.6395 6.02255 10.7154 6.02255 10.7951C6.02255 12.7874 6.02255 14.7798 6.01875 16.7721C6.01875 16.9087 6.00357 17.0529 5.95045 17.1781C5.85937 17.3983 5.66203 17.4969 5.43054 17.4969C4.22375 17.5007 3.01317 17.5045 1.80639 17.4969C1.44207 17.4931 1.22197 17.2465 1.21817 16.867C1.21438 15.8803 1.21817 14.8936 1.21817 13.9069C1.21817 13.8045 1.21058 13.7362 1.09673 13.6868C0.535084 13.4477 0.189747 13.0189 0.0455396 12.4269C0.0303599 12.3738 0.0151797 12.3206 0 12.2675C0.0113848 11.4592 0.0113855 10.6471 0.0113855 9.83876Z"
                                        fill="#9A9A9A" />
                                </svg>
                                <p class="desc">Siswa Kelas :</p>
                                <p class="desc text-capitalize">Kelas xII fisika 1</p>
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
                                <p class="desc">Tanggal Pelaksanaan :</p>
                                <p class="desc text-capitalize">28 Juli 2023</p>
                            </div>
                            <div class="d-flex flex-row align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="18" viewBox="0 0 20 18"
                                    fill="none">
                                    <path
                                        d="M19.4556 4.23788C19.3541 4.49671 19.1562 4.61852 18.9024 4.70479C15.9537 5.68431 13.0101 6.66889 10.0614 7.65348C9.84827 7.72453 9.65034 7.73468 9.4321 7.66363C6.45297 6.66889 3.47383 5.67416 0.494696 4.68449C0.088681 4.54746 -0.0889518 4.24295 0.0430031 3.90799C0.119131 3.71006 0.276462 3.60855 0.474394 3.54258C2.09338 3.00461 3.71237 2.46664 5.32628 1.92359C6.6915 1.46682 8.0618 1.01513 9.42195 0.553289C9.63003 0.482237 9.82289 0.482237 10.031 0.553289C13.005 1.54803 15.9791 2.53769 18.9532 3.52735C19.1917 3.60855 19.3592 3.74558 19.4505 3.97904C19.4556 4.06025 19.4556 4.1516 19.4556 4.23788Z"
                                        fill="#9A9A9A" />
                                    <path
                                        d="M19.4558 17.0784C19.2984 17.4032 19.0396 17.5098 18.6894 17.4997C17.9738 17.4844 17.2582 17.4946 16.5426 17.4946C16.096 17.4946 15.8777 17.2764 15.8777 16.8297C15.8777 15.8553 15.8727 14.8809 15.8777 13.9064C15.8828 13.1096 16.2584 12.5463 16.9791 12.2215C17.0958 12.1707 17.0958 12.0997 17.0958 12.0032C17.0958 10.2421 17.0958 8.48613 17.0907 6.72504C17.0907 6.54741 17.1415 6.47128 17.3089 6.42561C17.6135 6.3444 17.9078 6.23275 18.2326 6.12109C18.2326 6.21752 18.2326 6.28857 18.2326 6.3647C18.2326 8.23237 18.2326 10.095 18.2276 11.9626C18.2276 12.1047 18.2529 12.1809 18.4001 12.2468C18.9381 12.4854 19.2629 12.9117 19.4101 13.475C19.4202 13.5258 19.4405 13.5715 19.4507 13.6171C19.4558 14.7743 19.4558 15.9264 19.4558 17.0784Z"
                                        fill="#9A9A9A" />
                                    <path
                                        d="M15.7965 6.94336C15.7965 7.02964 15.7965 7.09561 15.7965 7.16667C15.7965 8.32888 15.7915 9.49618 15.8016 10.6584C15.8016 10.9375 15.7102 11.1507 15.5072 11.3435C14.1369 12.6377 12.523 13.4244 10.6452 13.6071C8.04164 13.8659 5.77811 13.0793 3.89014 11.2573C3.77341 11.1456 3.67698 10.9528 3.67698 10.7954C3.66175 9.53678 3.66683 8.27813 3.66683 7.01949C3.66683 7.00426 3.67698 6.98396 3.68713 6.95351C3.76833 6.97381 3.84446 6.99411 3.92059 7.01949C5.65123 7.59806 7.38694 8.17155 9.11758 8.7552C9.54897 8.90238 9.97021 8.88208 10.3965 8.73997C12.1272 8.15633 13.8578 7.58283 15.5935 7.00934C15.6493 6.98904 15.7052 6.97381 15.7965 6.94336Z"
                                        fill="#9A9A9A" />
                                </svg>
                                <p class="desc">Jenis Prestasi :</p>
                                <p class="desc text-capitalize">Akademik</p>
                            </div>
                        </div>
                        <article class="mt-4 article-content desc">
                            <p>
                                Prestasi luar biasa telah diraih oleh Siswa dalam ajang Olimpiade Fisika tingkat Regional.
                                Dalam kompetisi yang dihadiri oleh para siswa-siswa terbaik dari berbagai sekolah dan
                                wilayah, Siswa telah memamerkan pengetahuan mendalam, dedikasi, dan kemampuan luar biasa
                                dalam bidang fisika.
                            </p>
                            <p class="mt-2">
                                Dengan kerja keras dan tekad yang tinggi, Siswa berhasil mengatasi tantangan-tantangan
                                fisika yang kompleks dan memecahkan masalah-masalah yang memerlukan analisis mendalam serta
                                pemahaman yang kuat tentang konsep-konsep fundamental fisika. Keuletan Siswa dalam
                                merumuskan solusi kreatif dan inovatif untuk berbagai permasalahan fisika telah membawanya
                                meraih posisi terhormat di tingkat Regional.
                            </p>
                            <p class="mt-2">
                                Prestasi ini tidak hanya mencerminkan kecerdasan Siswa dalam memahami konsep-konsep fisika,
                                tetapi juga menunjukkan dedikasi dan disiplin diri yang tinggi dalam mengasah kemampuannya.
                                Siswa juga telah bekerja sama secara efektif dalam tim, berkolaborasi dengan rekan-rekan
                                sesama peserta untuk meraih keunggulan dalam kompetisi ini.
                            </p>
                            <p class="mt-2">
                                Pencapaian luar biasa ini akan terus menginspirasi Siswa dan mendorongnya untuk terus
                                mengejar pengetahuan dan keunggulan dalam bidang fisika maupun disiplin ilmiah lainnya.
                                Prestasi di tingkat Regional ini menjadi bukti konkret atas dedikasi Siswa dalam
                                mengembangkan potensi akademiknya, serta menjadi contoh teladan bagi teman-teman sejawatnya
                                dan generasi mendatang.
                            </p>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="ms-xl-3">
                        <p class="text-black fs-3 fw-bold text-capitalize">Cari Prestasi</p>
                        <div class="mt-3 input-wrapper d-flex justify-content-between gap-3">
                            <input type="text" class="input-text w-100 desc" name=""
                                placeholder="masukkan nama prestasi">
                            <button class="btn btn-color btn-input">cari</button>
                        </div>
                        <p class="mt-5 text-black fs-5 fw-bold">Prestasi Terbaru</p>


                        <div class="mt-3 d-flex flex-column gap-4 other-prestasi-wrapper">
                            <a href="detailPrestasi.html" class="d-flex gap-3 align-items-center">
                                <div class="image-wrapper position-relative">
                                    <div class="position-relative">
                                        <img src="../img/prestasi3.png" alt="juara 1 lomba renang"
                                            class="w-100 img-prestasi img-prestasi-sm">
                                    </div>
                                    <div class="position-absolute top-0 start-0" style="z-index: 999999">
                                        <div
                                            class="number-wrapper-sm d-flex justify-content-center align-items-center fs-14 fw-black text-white">
                                            1</div>
                                    </div>
                                    <div class="position-absolute bottom-0 end-0" style="z-index: 999999">
                                        <div
                                            class="prestasi-category-wrapper-sm d-flex justify-content-center align-items-center fs-10 fw-medium text-white">
                                            Non Akademik</div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>
                                        <p class="text-start fs-18 fw-bold">Juara 1</p>
                                        <p class="text-start fw-semibold text-capitalize fs-15">Lomba Renang tingkat Sekolah
                                        </p>
                                    </div>
                                    <div class="mt-2 d-flex gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="19"
                                            viewBox="0 0 15 19" fill="none">
                                            <path
                                                d="M7.62927 0.941692C7.85758 0.98776 8.09019 1.02545 8.31419 1.07571C9.87357 1.43169 11.2046 2.87656 11.4157 4.42613C11.5536 5.44382 11.4028 6.40706 10.8083 7.26979C10.02 8.41313 8.9345 9.07902 7.49573 9.17535C5.60466 9.30099 4.05389 8.22047 3.34744 6.75048C2.68405 5.37262 2.95113 3.53826 3.99359 2.39493C4.63112 1.69553 5.39789 1.20972 6.34989 1.02126C6.51358 0.987756 6.67296 0.962628 6.83666 0.9375C7.10373 0.941688 7.3665 0.941692 7.62927 0.941692Z"
                                                fill="#232323" fill-opacity="0.46" />
                                            <path
                                                d="M7.33633 18.0624C5.94495 18.0624 4.54926 18.0624 3.15788 18.0624C2.44281 18.0624 1.77081 17.9242 1.17635 17.5138C0.50435 17.0447 0.108043 16.4039 0.0391205 15.6124C-0.0858023 14.1968 0.0821974 12.8064 0.63358 11.483C0.960964 10.6957 1.44773 10.013 2.24896 9.5984C2.74865 9.33874 3.28711 9.2131 3.85142 9.22147C4.02803 9.22566 4.21757 9.30942 4.37695 9.39318C4.64403 9.53558 4.88957 9.71148 5.14803 9.86224C6.61695 10.7375 8.08587 10.7375 9.55048 9.85387C9.75294 9.73241 9.96402 9.61096 10.1536 9.47276C10.5068 9.21729 10.8902 9.17959 11.3123 9.24241C12.4539 9.40575 13.2637 10.013 13.8065 10.9804C14.2932 11.8474 14.5129 12.7855 14.6077 13.7571C14.6594 14.2513 14.6809 14.7455 14.6766 15.2397C14.6594 16.7641 13.604 17.8697 12.0446 18.0289C11.8551 18.0498 11.6655 18.0582 11.4803 18.0582C10.0976 18.0624 8.71479 18.0624 7.33633 18.0624Z"
                                                fill="#232323" fill-opacity="0.46" />
                                        </svg>
                                        <p class="text-secondary fs-14">Rizky Putra</p>
                                    </div>
                                </div>
                            </a>
                            <a href="detailPrestasi.html" class="d-flex gap-3 align-items-center">
                                <div class="image-wrapper position-relative">
                                    <div class="position-relative">
                                        <img src="../img/prestasi2.png" alt="juara 1 olimpiade fisika"
                                            class="w-100 img-prestasi img-prestasi-sm">
                                    </div>
                                    <div class="position-absolute top-0 start-0" style="z-index: 999999">
                                        <div
                                            class="number-wrapper-sm d-flex justify-content-center align-items-center fs-14 fw-black text-white">
                                            2</div>
                                    </div>
                                    <div class="position-absolute bottom-0 end-0" style="z-index: 999999">
                                        <div
                                            class="prestasi-category-wrapper-sm d-flex justify-content-center align-items-center fs-10 fw-medium text-white">
                                            Akademik</div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>
                                        <p class="text-start fs-18 fw-bold">Juara 1</p>
                                        <p class="text-start fw-semibold text-capitalize fs-15">Olimpiade Fisika tingkat
                                            Regional</p>
                                    </div>
                                    <div class="mt-2 d-flex gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="19"
                                            viewBox="0 0 15 19" fill="none">
                                            <path
                                                d="M7.62927 0.941692C7.85758 0.98776 8.09019 1.02545 8.31419 1.07571C9.87357 1.43169 11.2046 2.87656 11.4157 4.42613C11.5536 5.44382 11.4028 6.40706 10.8083 7.26979C10.02 8.41313 8.9345 9.07902 7.49573 9.17535C5.60466 9.30099 4.05389 8.22047 3.34744 6.75048C2.68405 5.37262 2.95113 3.53826 3.99359 2.39493C4.63112 1.69553 5.39789 1.20972 6.34989 1.02126C6.51358 0.987756 6.67296 0.962628 6.83666 0.9375C7.10373 0.941688 7.3665 0.941692 7.62927 0.941692Z"
                                                fill="#232323" fill-opacity="0.46" />
                                            <path
                                                d="M7.33633 18.0624C5.94495 18.0624 4.54926 18.0624 3.15788 18.0624C2.44281 18.0624 1.77081 17.9242 1.17635 17.5138C0.50435 17.0447 0.108043 16.4039 0.0391205 15.6124C-0.0858023 14.1968 0.0821974 12.8064 0.63358 11.483C0.960964 10.6957 1.44773 10.013 2.24896 9.5984C2.74865 9.33874 3.28711 9.2131 3.85142 9.22147C4.02803 9.22566 4.21757 9.30942 4.37695 9.39318C4.64403 9.53558 4.88957 9.71148 5.14803 9.86224C6.61695 10.7375 8.08587 10.7375 9.55048 9.85387C9.75294 9.73241 9.96402 9.61096 10.1536 9.47276C10.5068 9.21729 10.8902 9.17959 11.3123 9.24241C12.4539 9.40575 13.2637 10.013 13.8065 10.9804C14.2932 11.8474 14.5129 12.7855 14.6077 13.7571C14.6594 14.2513 14.6809 14.7455 14.6766 15.2397C14.6594 16.7641 13.604 17.8697 12.0446 18.0289C11.8551 18.0498 11.6655 18.0582 11.4803 18.0582C10.0976 18.0624 8.71479 18.0624 7.33633 18.0624Z"
                                                fill="#232323" fill-opacity="0.46" />
                                        </svg>
                                        <p class="text-secondary fs-14">Siti Rahma</p>
                                    </div>
                                </div>
                            </a>
                            <a href="detailPrestasi.html" class="d-flex gap-3 align-items-center">
                                <div class="image-wrapper position-relative">
                                    <div class="position-relative">
                                        <img src="../img/prestasi4.png" alt="juara 2 olimpiade Biologi"
                                            class="w-100 img-prestasi img-prestasi-sm">
                                    </div>
                                    <div class="position-absolute top-0 start-0" style="z-index: 999999">
                                        <div
                                            class="number-wrapper-sm d-flex justify-content-center align-items-center fs-14 fw-black text-white">
                                            3</div>
                                    </div>
                                    <div class="position-absolute bottom-0 end-0" style="z-index: 999999">
                                        <div
                                            class="prestasi-category-wrapper-sm d-flex justify-content-center align-items-center fs-10 fw-medium text-white">
                                            Akademik</div>
                                    </div>
                                </div>
                                <div class="">
                                    <div>
                                        <p class="text-start fs-18 fw-bold">Juara 2</p>
                                        <p class="text-start fw-semibold text-capitalize fs-15">Olimpiade Biologi tingkat
                                            Provinsi</p>
                                    </div>
                                    <div class="mt-2 d-flex gap-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="19"
                                            viewBox="0 0 15 19" fill="none">
                                            <path
                                                d="M7.62927 0.941692C7.85758 0.98776 8.09019 1.02545 8.31419 1.07571C9.87357 1.43169 11.2046 2.87656 11.4157 4.42613C11.5536 5.44382 11.4028 6.40706 10.8083 7.26979C10.02 8.41313 8.9345 9.07902 7.49573 9.17535C5.60466 9.30099 4.05389 8.22047 3.34744 6.75048C2.68405 5.37262 2.95113 3.53826 3.99359 2.39493C4.63112 1.69553 5.39789 1.20972 6.34989 1.02126C6.51358 0.987756 6.67296 0.962628 6.83666 0.9375C7.10373 0.941688 7.3665 0.941692 7.62927 0.941692Z"
                                                fill="#232323" fill-opacity="0.46" />
                                            <path
                                                d="M7.33633 18.0624C5.94495 18.0624 4.54926 18.0624 3.15788 18.0624C2.44281 18.0624 1.77081 17.9242 1.17635 17.5138C0.50435 17.0447 0.108043 16.4039 0.0391205 15.6124C-0.0858023 14.1968 0.0821974 12.8064 0.63358 11.483C0.960964 10.6957 1.44773 10.013 2.24896 9.5984C2.74865 9.33874 3.28711 9.2131 3.85142 9.22147C4.02803 9.22566 4.21757 9.30942 4.37695 9.39318C4.64403 9.53558 4.88957 9.71148 5.14803 9.86224C6.61695 10.7375 8.08587 10.7375 9.55048 9.85387C9.75294 9.73241 9.96402 9.61096 10.1536 9.47276C10.5068 9.21729 10.8902 9.17959 11.3123 9.24241C12.4539 9.40575 13.2637 10.013 13.8065 10.9804C14.2932 11.8474 14.5129 12.7855 14.6077 13.7571C14.6594 14.2513 14.6809 14.7455 14.6766 15.2397C14.6594 16.7641 13.604 17.8697 12.0446 18.0289C11.8551 18.0498 11.6655 18.0582 11.4803 18.0582C10.0976 18.0624 8.71479 18.0624 7.33633 18.0624Z"
                                                fill="#232323" fill-opacity="0.46" />
                                        </svg>
                                        <p class="text-secondary fs-14">Siti Rahma</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
