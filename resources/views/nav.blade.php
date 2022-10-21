@auth
    <div class="nav-bar">
        <nav>
            <ul>
                <li class="nav-item">
                    <a href="{{ route('index') }}" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="84" height="84" viewBox="0 0 84 84">
                            <image id="accueil_1_" data-name="accueil (1)" width="84" height="84" xlink:href="data:image/png;base64,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"/>
                        </svg>
                    </a>
                </li>
                @if (\Illuminate\Support\Facades\Auth::user()->role == App\Enums\RoleEnum::Admin->value || \Illuminate\Support\Facades\Auth::user()->role == "super_admin")
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="98.98" height="98.98" viewBox="0 0 98.98 98.98">
                                <path id="Icon_material-account-circle" data-name="Icon material-account-circle" d="M50.49,3A47.49,47.49,0,1,0,97.98,50.49,47.508,47.508,0,0,0,50.49,3Zm0,14.247A14.247,14.247,0,1,1,36.243,31.494,14.228,14.228,0,0,1,50.49,17.247Zm0,67.436A34.2,34.2,0,0,1,22,69.391c.142-9.451,19-14.627,28.494-14.627,9.451,0,28.352,5.176,28.494,14.627A34.2,34.2,0,0,1,50.49,84.683Z" transform="translate(-1 -1)" fill="none" stroke="#fff" stroke-width="4"/>
                            </svg>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a href="{{ route('auth.logout') }}" class="nav-link">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="85" height="85" viewBox="0 0 85 85">
                            <image id="se-deconnecter_1_" data-name="se-deconnecter (1)" width="85" height="85" xlink:href="data:image/png;base64,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fOXK7Pbcs/acADORecEF/RbAW99ae0Yal3neef0GwB//ce0ZAWYqu0MPzbz55v4ujt/5Tu0ZaVjmYJDd9df3t/lfcUXtGQFmK/NDH+ovALou88ADa89IozIf8pD+ntyZ2T3ucbVnBJit6bsAt9zS30XyGc+oPSPtGUz/29Kl/T3EypVRLrig9qAAs1UG3/9+xOc+19sD5LJltWekPb8JgD6ffB/6UCmZtQcF2D0f/nBvhy59vgiDO9Df7/9vuSVz8eLa8wHsruzudKd+3yt1wAG1Z6Qtg+z23z/K/vv3c/hLLillzZraQwLsrjLYsiXKeef19wg+JI3RGvT7pLvwwtoDAgxPn9e0JUtqT0dbBlH6fNItX157QIDhueiiiK7r59gCgNEaRPb0pMubboq88sraAwIMSym//GXEihX9HFwAMFqDKPe/fy9HLqtWlcEtt9QeEGC4egqAeMADak9GWwYRd7tbP4detar2cADD973v9XLY7OtaDNs3iNx7734O3dMPCUBN2dOLm7JgQe3RaMsgYp99ejlyXntt7eEAhu+66/o57rx5vjGVURpE6ekOQNmwofZwAENX1q/v79h93ZGF2xtE9HTbKXv8IQGo5sYbezt0+jUAozOI2GuvXo5cNm6sPRzA8PV4bSvz59eejnYMIkqpvQiAOSP7/HIz12NGZ1B7AQDA6AkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkAAGiQAACABgkA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M/fdt/Z842Px4tE9Vluv/LcRAAAzkfvtF7FHT3dPFy2qPd44mP5shLvcZTSP1s7v/G9LAADMSJ+f3ueTASMiStm8OfKmm/p/pDZf+W8jAAAYP2XNmn4foN1X/tsIAADG0PLl/R277Vf+2wgAAMbQ+ef3c1yv/LcRAACMoS9/OeIb3xjuMb3yvzUBAMDYKSUz8nWvi8gczhG98r8tAQDAWCqDr3wl4k1v2v0jeeW/PQIAgDH2xjdGvPe9s//nv/xlr/y3TwAAMLZKySzlJS+JeNnLIjZu3PV/cuvWiLe+NeKxj/XKfwf6+zpFXwcMTJ7sFi3q77p5xBG15xtnmQcfnPnud2feeOOOz+HmzZmf+ETmYYfVXu+482VAAMwJpaxdG3Haadm9+tURxx0X5cEPjly8OMrUVMR110V897uRX/1qGWzYUHutc4EAAGBOKYObb474ylem/8VseQ8AADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRIAABAgwQAADRoEHHzzf0ces89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"/>
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
        <p class="username">{{\Illuminate\Support\Facades\Auth::user()->firstname}} <span class="lastname">{{\Illuminate\Support\Facades\Auth::user()->lastname}}</span></p>
    </div>
@endif