<div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">

                <div class="row">


                    <div class="col-xl-12 col-lg-8">

                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div>
                                                <h5>Ma boutique </h5>
                                                <ol class="breadcrumb p-0 bg-transparent mb-2">
                                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Accueil</a></li>
                                                    <li class="breadcrumb-item active">Boutique</li>
                                                </ol>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-inline float-md-end">
                                                <div class="search-box ms-2">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control bg-light border-light rounded" placeholder="Chercher...">
                                                        <i class="bx bx-search search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <ul class="nav nav-tabs nav-tabs-custom mt-3 mb-2 ecommerce-sortby-list">

                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#popularity" role="tab" aria-selected="false">Mes articles </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#newest" role="tab" aria-selected="false">Mon Panier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#discount" role="tab" aria-selected="true">Commander</a>
                                        </li>
                                    </ul>

                                      <!-- Tab panes -->
                                        <div class="tab-content p-3 text-muted">
                                            <div class="tab-pane active" id="popularity" role="tabpanel">
                                                <div class="row">
                                                    @php $total = 0 @endphp
                                                    @foreach ($allArticles as $article)

                                                    @php $total += $article['price'] * $article['quantity'] @endphp
                                                    <div class="col-xl-4 col-sm-6">
                                                        <div class="product-box rounded p-3 mt-4">
                                                            <div class="pricing-badge">
                                                                <span class="badge bg-danger"> 20 %</span>
                                                            </div>
                                                            <div class="product-img bg-light p-3 rounded">
                                                                <img src="{{Storage::url($article->image)}}" alt="" class="img-fluid mx-auto d-block">
                                                            </div>
                                                            <div class="product-content pt-3">
                                                                <p class="text-muted font-size-13 mb-0">Gray, Chair</p>
                                                                <h5 class="mt-1 mb-0"><a href="#" class="text-dark font-size-16">{{$article->nom}}</a></h5>
                                                               
                                                                <button  wire:click="add({{$article->id}})" class="product-buy-icon bg-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Ajouter au panier">
                                                                    <i class="mdi mdi-cart-outline text-white font-size-16"></i>
                                                                </button>
                                                                <h5 class="font-size-20 text-primary mt-3 mb-0">{{$article->prix}}FCFA

                                                                </h5>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endforeach

                                                </div>
                                            </div>

                                            <div class="tab-pane" id="newest" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-xl-8">
                                                        <div class="card">
                                                            <div class="card-body">

                                                                <div class="table-responsive">
                                                                    <table class="table align-middle mb-0 table-nowrap mb-0">

                                                                        <thead class="table-light">
                                                                            <tr>
                                                                                <th>Product</th>
                                                                                <th>Product Name</th>
                                                                                <th style="width: 120px;">Price</th>
                                                                                <th>Quantity</th>
                                                                                <th>Total</th>
                                                                                <th>Action</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @php $total = 0 @endphp
                                                                            @foreach( (array)session('cart') as $id => $details)
                                                                            @php $total += $details['price'] * $details['quantity'] @endphp

                                                                            <tr>                                                                                    <th><img src="{{Storage::url($details['image'])}}" alt="" class="avatar-lg rounded p-1"></th>
                                                                                <td>
                                                                                    <div>
                                                                                        <h5 class="text-truncate font-size-16"><a href="ecommerce-product-detail.html" class="text-dark">Sofa Home Chair Black</a></h5>

                                                                                        <p class="mb-0 mt-1">Categorie : <span class="fw-medium">Accesoires</span></p>
                                                                                    </div>
                                                                                </td>
                                                                                <td>{{$details['price']}} FCFA </td>
                                                                                <td>
                                                                                    <div class="d-inline-flex">
                                                                                        {{ $details['quantity']}}

                                                                                    </div>
                                                                                </td>
                                                                                <td>{{ $details['price'] * $details['quantity'] }} FCFA</td>
                                                                                <td>
                                                                                    <ul class="list-inline mb-0">
                                                                                        <li class="list-inline-item">
                                                                                            <button  type="button" wire:click="delete({{$details['articleId']}})" ><i class="bx bx-trash-alt font-size-18"></i></button>
                                                                                        </li>
                                                                                        <li class="list-inline-item">
                                                                                            <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" title="" class="px-2 text-primary" data-bs-original-title="Like" aria-label="Like"><i class="bx bx-heart font-size-18"></i></a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </td>
                                                                            </tr>
                                                                            @endforeach


                                                                        </tbody>
                                                                    </table>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <!-- end card -->


                                                    </div>

                                                    <div class="col-xl-4">
                                                        <div class="mt-5 mt-lg-0">
                                                            <div class="card">
                                                                <div class="card-header bg-transparent border-bottom py-3 px-4">
                                                                    <h5 class="font-size-16 mb-0">Sommaire <span class="float-end">#MN0124</span></h5>
                                                                </div>
                                                                <div class="card-body p-4 pt-2">

                                                                    <div class="table-responsive">
                                                                        <table class="table mb-0">
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Taxe :</td>
                                                                                    <td class="text-end">0</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Paiement  : </td>
                                                                                    <td class="text-end">Cash</td>
                                                                                </tr>

                                                                                <tr class="bg-light">
                                                                                    <th>Total :</th>
                                                                                    <td class="text-end">
                                                                                        <span class="fw-bold">
                                                                                            <strong>{{ $total }}FCFA </strong>
                                                                                        </span>
                                                                                    </td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                    <!-- end table-responsive -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="discount" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-xl-8">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <ol class="activity-checkout mb-0 px-4 mt-2">
                                                                    <li class="checkout-item">
                                                                        <div class="avatar checkout-icon p-1">
                                                                            <div class="avatar-title rounded-circle bg-primary">
                                                                                <h5 class="text-white font-size-16 mb-0">01</h5>
                                                                            </div>
                                                                        </div>
                                                                        <div class="feed-item-list">
                                                                            <div>
                                                                                <h5 class="font-size-16 mb-1">Information sur le client </h5>
                                                                                <p class="text-muted text-truncate mb-4">Entrer les informations sur le client </p>
                                                                                <div class="mb-3">
                                                                                    <form>
                                                                                        <div>
                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="billing-name">Name</label>
                                                                                                        <input type="text" class="form-control" id="billing-name" placeholder="Enter name">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="billing-email-address">Email Address</label>
                                                                                                        <input type="email" class="form-control" id="billing-email-address" placeholder="Enter email">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4">
                                                                                                    <div class="mb-3">
                                                                                                        <label class="form-label" for="billing-phone">Phone</label>
                                                                                                        <input type="text" class="form-control" id="billing-phone" placeholder="Enter Phone no.">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>

                                                                                            <div class="mb-3">
                                                                                                <label class="form-label" for="billing-address">Address</label>
                                                                                                <textarea class="form-control" id="billing-address" rows="3" placeholder="Enter full address"></textarea>
                                                                                            </div>

                                                                                            <div class="row">
                                                                                                <div class="col-lg-4">
                                                                                                    <div class="mb-4 mb-lg-0">
                                                                                                        <label class="form-label">Country</label>
                                                                                                        <select class="form-control form-select" title="Country">
                                                                                                            <option value="0">Select Country</option>
                                                                                                            <option value="AF">Afghanistan</option>
                                                                                                            <option value="AL">Albania</option>
                                                                                                            <option value="DZ">Algeria</option>
                                                                                                            <option value="AS">American Samoa</option>
                                                                                                            <option value="AD">Andorra</option>
                                                                                                            <option value="AO">Angola</option>
                                                                                                            <option value="AI">Anguilla</option>
                                                                                                            <option value="AQ">Antarctica</option>
                                                                                                            <option value="AR">Argentina</option>
                                                                                                            <option value="AM">Armenia</option>
                                                                                                            <option value="AW">Aruba</option>
                                                                                                            <option value="AU">Australia</option>
                                                                                                            <option value="AT">Austria</option>
                                                                                                            <option value="AZ">Azerbaijan</option>
                                                                                                            <option value="BS">Bahamas</option>
                                                                                                            <option value="BH">Bahrain</option>
                                                                                                            <option value="BD">Bangladesh</option>
                                                                                                            <option value="BB">Barbados</option>
                                                                                                            <option value="BY">Belarus</option>
                                                                                                            <option value="BE">Belgium</option>
                                                                                                            <option value="BZ">Belize</option>
                                                                                                            <option value="BJ">Benin</option>
                                                                                                            <option value="BM">Bermuda</option>
                                                                                                            <option value="BT">Bhutan</option>
                                                                                                            <option value="BO">Bolivia</option>
                                                                                                            <option value="BW">Botswana</option>
                                                                                                            <option value="BV">Bouvet Island</option>
                                                                                                            <option value="BR">Brazil</option>
                                                                                                            <option value="BN">Brunei Darussalam</option>
                                                                                                            <option value="BG">Bulgaria</option>
                                                                                                            <option value="BF">Burkina Faso</option>
                                                                                                            <option value="BI">Burundi</option>
                                                                                                            <option value="KH">Cambodia</option>
                                                                                                            <option value="CM">Cameroon</option>
                                                                                                            <option value="CA">Canada</option>
                                                                                                            <option value="CV">Cape Verde</option>
                                                                                                            <option value="KY">Cayman Islands</option>
                                                                                                            <option value="CF">Central African Republic</option>
                                                                                                            <option value="TD">Chad</option>
                                                                                                            <option value="CL">Chile</option>
                                                                                                            <option value="CN">China</option>
                                                                                                            <option value="CX">Christmas Island</option>
                                                                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                                                                            <option value="CO">Colombia</option>
                                                                                                            <option value="KM">Comoros</option>
                                                                                                            <option value="CG">Congo</option>
                                                                                                            <option value="CK">Cook Islands</option>
                                                                                                            <option value="CR">Costa Rica</option>
                                                                                                            <option value="CI">Cote d'Ivoire</option>
                                                                                                            <option value="HR">Croatia (Hrvatska)</option>
                                                                                                            <option value="CU">Cuba</option>
                                                                                                            <option value="CY">Cyprus</option>
                                                                                                            <option value="CZ">Czech Republic</option>
                                                                                                            <option value="DK">Denmark</option>
                                                                                                            <option value="DJ">Djibouti</option>
                                                                                                            <option value="DM">Dominica</option>
                                                                                                            <option value="DO">Dominican Republic</option>
                                                                                                            <option value="EC">Ecuador</option>
                                                                                                            <option value="EG">Egypt</option>
                                                                                                            <option value="SV">El Salvador</option>
                                                                                                            <option value="GQ">Equatorial Guinea</option>
                                                                                                            <option value="ER">Eritrea</option>
                                                                                                            <option value="EE">Estonia</option>
                                                                                                            <option value="ET">Ethiopia</option>
                                                                                                            <option value="FK">Falkland Islands (Malvinas)</option>
                                                                                                            <option value="FO">Faroe Islands</option>
                                                                                                            <option value="FJ">Fiji</option>
                                                                                                            <option value="FI">Finland</option>
                                                                                                            <option value="FR">France</option>
                                                                                                            <option value="GF">French Guiana</option>
                                                                                                            <option value="PF">French Polynesia</option>
                                                                                                            <option value="GA">Gabon</option>
                                                                                                            <option value="GM">Gambia</option>
                                                                                                            <option value="GE">Georgia</option>
                                                                                                            <option value="DE">Germany</option>
                                                                                                            <option value="GH">Ghana</option>
                                                                                                            <option value="GI">Gibraltar</option>
                                                                                                            <option value="GR">Greece</option>
                                                                                                            <option value="GL">Greenland</option>
                                                                                                            <option value="GD">Grenada</option>
                                                                                                            <option value="GP">Guadeloupe</option>
                                                                                                            <option value="GU">Guam</option>
                                                                                                            <option value="GT">Guatemala</option>
                                                                                                            <option value="GN">Guinea</option>
                                                                                                            <option value="GW">Guinea-Bissau</option>
                                                                                                            <option value="GY">Guyana</option>
                                                                                                            <option value="HT">Haiti</option>
                                                                                                            <option value="HN">Honduras</option>
                                                                                                            <option value="HK">Hong Kong</option>
                                                                                                            <option value="HU">Hungary</option>
                                                                                                            <option value="IS">Iceland</option>
                                                                                                            <option value="IN">India</option>
                                                                                                            <option value="ID">Indonesia</option>
                                                                                                            <option value="IQ">Iraq</option>
                                                                                                            <option value="IE">Ireland</option>
                                                                                                            <option value="IL">Israel</option>
                                                                                                            <option value="IT">Italy</option>
                                                                                                            <option value="JM">Jamaica</option>
                                                                                                            <option value="JP">Japan</option>
                                                                                                            <option value="JO">Jordan</option>
                                                                                                            <option value="KZ">Kazakhstan</option>
                                                                                                            <option value="KE">Kenya</option>
                                                                                                            <option value="KI">Kiribati</option>
                                                                                                            <option value="KR">Korea, Republic of</option>
                                                                                                            <option value="KW">Kuwait</option>
                                                                                                            <option value="KG">Kyrgyzstan</option>
                                                                                                            <option value="LV">Latvia</option>
                                                                                                            <option value="LB">Lebanon</option>
                                                                                                            <option value="LS">Lesotho</option>
                                                                                                            <option value="LR">Liberia</option>
                                                                                                            <option value="LY">Libyan Arab Jamahiriya</option>
                                                                                                            <option value="LI">Liechtenstein</option>
                                                                                                            <option value="LT">Lithuania</option>
                                                                                                            <option value="LU">Luxembourg</option>
                                                                                                            <option value="MO">Macau</option>
                                                                                                            <option value="MG">Madagascar</option>
                                                                                                            <option value="MW">Malawi</option>
                                                                                                            <option value="MY">Malaysia</option>
                                                                                                            <option value="MV">Maldives</option>
                                                                                                            <option value="ML">Mali</option>
                                                                                                            <option value="MT">Malta</option>
                                                                                                            <option value="MH">Marshall Islands</option>
                                                                                                            <option value="MQ">Martinique</option>
                                                                                                            <option value="MR">Mauritania</option>
                                                                                                            <option value="MU">Mauritius</option>
                                                                                                            <option value="YT">Mayotte</option>
                                                                                                            <option value="MX">Mexico</option>
                                                                                                            <option value="MD">Moldova, Republic of</option>
                                                                                                            <option value="MC">Monaco</option>
                                                                                                            <option value="MN">Mongolia</option>
                                                                                                            <option value="MS">Montserrat</option>
                                                                                                            <option value="MA">Morocco</option>
                                                                                                            <option value="MZ">Mozambique</option>
                                                                                                            <option value="MM">Myanmar</option>
                                                                                                            <option value="NA">Namibia</option>
                                                                                                            <option value="NR">Nauru</option>
                                                                                                            <option value="NP">Nepal</option>
                                                                                                            <option value="NL">Netherlands</option>
                                                                                                            <option value="AN">Netherlands Antilles</option>
                                                                                                            <option value="NC">New Caledonia</option>
                                                                                                            <option value="NZ">New Zealand</option>
                                                                                                            <option value="NI">Nicaragua</option>
                                                                                                            <option value="NE">Niger</option>
                                                                                                            <option value="NG">Nigeria</option>
                                                                                                            <option value="NU">Niue</option>
                                                                                                            <option value="NF">Norfolk Island</option>
                                                                                                            <option value="MP">Northern Mariana Islands</option>
                                                                                                            <option value="NO">Norway</option>
                                                                                                            <option value="OM">Oman</option>
                                                                                                            <option value="PW">Palau</option>
                                                                                                            <option value="PA">Panama</option>
                                                                                                            <option value="PG">Papua New Guinea</option>
                                                                                                            <option value="PY">Paraguay</option>
                                                                                                            <option value="PE">Peru</option>
                                                                                                            <option value="PH">Philippines</option>
                                                                                                            <option value="PN">Pitcairn</option>
                                                                                                            <option value="PL">Poland</option>
                                                                                                            <option value="PT">Portugal</option>
                                                                                                            <option value="PR">Puerto Rico</option>
                                                                                                            <option value="QA">Qatar</option>
                                                                                                            <option value="RE">Reunion</option>
                                                                                                            <option value="RO">Romania</option>
                                                                                                            <option value="RU">Russian Federation</option>
                                                                                                            <option value="RW">Rwanda</option>
                                                                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                                                                            <option value="LC">Saint LUCIA</option>
                                                                                                            <option value="WS">Samoa</option>
                                                                                                            <option value="SM">San Marino</option>
                                                                                                            <option value="ST">Sao Tome and Principe</option>
                                                                                                            <option value="SA">Saudi Arabia</option>
                                                                                                            <option value="SN">Senegal</option>
                                                                                                            <option value="SC">Seychelles</option>
                                                                                                            <option value="SL">Sierra Leone</option>
                                                                                                            <option value="SG">Singapore</option>
                                                                                                            <option value="SK">Slovakia (Slovak Republic)</option>
                                                                                                            <option value="SI">Slovenia</option>
                                                                                                            <option value="SB">Solomon Islands</option>
                                                                                                            <option value="SO">Somalia</option>
                                                                                                            <option value="ZA">South Africa</option>
                                                                                                            <option value="ES">Spain</option>
                                                                                                            <option value="LK">Sri Lanka</option>
                                                                                                            <option value="SH">St. Helena</option>
                                                                                                            <option value="PM">St. Pierre and Miquelon</option>
                                                                                                            <option value="SD">Sudan</option>
                                                                                                            <option value="SR">Suriname</option>
                                                                                                            <option value="SZ">Swaziland</option>
                                                                                                            <option value="SE">Sweden</option>
                                                                                                            <option value="CH">Switzerland</option>
                                                                                                            <option value="SY">Syrian Arab Republic</option>
                                                                                                            <option value="TW">Taiwan, Province of China</option>
                                                                                                            <option value="TJ">Tajikistan</option>
                                                                                                            <option value="TZ">Tanzania, United Republic of</option>
                                                                                                            <option value="TH">Thailand</option>
                                                                                                            <option value="TG">Togo</option>
                                                                                                            <option value="TK">Tokelau</option>
                                                                                                            <option value="TO">Tonga</option>
                                                                                                            <option value="TT">Trinidad and Tobago</option>
                                                                                                            <option value="TN">Tunisia</option>
                                                                                                            <option value="TR">Turkey</option>
                                                                                                            <option value="TM">Turkmenistan</option>
                                                                                                            <option value="TC">Turks and Caicos Islands</option>
                                                                                                            <option value="TV">Tuvalu</option>
                                                                                                            <option value="UG">Uganda</option>
                                                                                                            <option value="UA">Ukraine</option>
                                                                                                            <option value="AE">United Arab Emirates</option>
                                                                                                            <option value="GB">United Kingdom</option>
                                                                                                            <option value="US">United States</option>
                                                                                                            <option value="UY">Uruguay</option>
                                                                                                            <option value="UZ">Uzbekistan</option>
                                                                                                            <option value="VU">Vanuatu</option>
                                                                                                            <option value="VE">Venezuela</option>
                                                                                                            <option value="VN">Viet Nam</option>
                                                                                                            <option value="VG">Virgin Islands (British)</option>
                                                                                                            <option value="VI">Virgin Islands (U.S.)</option>
                                                                                                            <option value="WF">Wallis and Futuna Islands</option>
                                                                                                            <option value="EH">Western Sahara</option>
                                                                                                            <option value="YE">Yemen</option>
                                                                                                            <option value="ZM">Zambia</option>
                                                                                                            <option value="ZW">Zimbabwe</option>
                                                                                                        </select>
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-lg-4">
                                                                                                    <div class="mb-4 mb-lg-0">
                                                                                                        <label class="form-label" for="billing-city">City</label>
                                                                                                        <input type="text" class="form-control" id="billing-city" placeholder="Enter City">
                                                                                                    </div>
                                                                                                </div>

                                                                                                <div class="col-lg-4">
                                                                                                    <div class="mb-0">
                                                                                                        <label class="form-label" for="zip-code">Zip / Postal code</label>
                                                                                                        <input type="text" class="form-control" id="zip-code" placeholder="Enter Postal code">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="checkout-item">
                                                                        <div class="avatar checkout-icon p-1">
                                                                            <div class="avatar-title rounded-circle bg-primary">
                                                                                <h5 class="text-white font-size-16 mb-0">02</h5>
                                                                            </div>
                                                                        </div>

                                                                    </li>

                                                                </ol>
                                                            </div>
                                                        </div>

                                                        <div class="row my-4">
                                                            <div class="col">
                                                                <a href="ecommerce-products.html" class="btn btn-link text-muted">
                                                                    <i class="mdi mdi-arrow-left me-1"></i> Continue Shopping </a>
                                                            </div> <!-- end col -->
                                                            <div class="col">
                                                                <div class="text-end mt-2 mt-sm-0">
                                                                    <a href="#" class="btn btn-success">
                                                                        <i class="mdi mdi-cart-outline me-1"></i> Procced </a>
                                                                </div>
                                                            </div> <!-- end col -->
                                                        </div> <!-- end row-->
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <div class="card checkout-order-summary">
                                                            <div class="card-body">
                                                                <div class="p-3 bg-light mb-3">
                                                                    <h5 class="font-size-16 mb-0">Order Summary <span class="float-end ms-2">#MN0124</span></h5>
                                                                </div>
                                                                <div class="table-responsive">
                                                                    <table class="table align-middle mb-0 table-nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="border-top-0" style="width: 90px;" scope="col">Product</th>
                                                                                <th class="border-top-0" scope="col">Product Desc</th>
                                                                                <th class="border-top-0" scope="col">Price</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <th scope="row"><img src="assets/images/product/img-1.png" alt="product-img" title="product-img" class="avatar-md"></th>
                                                                                <td>
                                                                                    <h5 class="font-size-15 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Home &amp; Office Chair Crime</a></h5>
                                                                                    <p class="text-muted mb-0">$ 260 x 2</p>
                                                                                </td>
                                                                                <td>$ 520</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <th scope="row"><img src="assets/images/product/img-2.png" alt="product-img" title="product-img" class="avatar-md"></th>
                                                                                <td>
                                                                                    <h5 class="font-size-15 text-truncate"><a href="ecommerce-product-detail.html" class="text-dark">Sofa Home Chair Black</a></h5>
                                                                                    <p class="text-muted mb-0">$ 260 x 1</p>
                                                                                </td>
                                                                                <td>$ 260</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <h5 class="font-size-14 m-0">Sub Total :</h5>
                                                                                </td>
                                                                                <td>
                                                                                    $ 780
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <h5 class="font-size-14 m-0">Discount :</h5>
                                                                                </td>
                                                                                <td>
                                                                                    - $ 78
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <h5 class="font-size-14 m-0">Shipping Charge :</h5>
                                                                                </td>
                                                                                <td>
                                                                                    $ 25
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td colspan="2">
                                                                                    <h5 class="font-size-14 m-0">Estimated Tax :</h5>
                                                                                </td>
                                                                                <td>
                                                                                    $ 18.20
                                                                                </td>
                                                                            </tr>

                                                                            <tr class="bg-light">
                                                                                <td colspan="2">
                                                                                    <h5 class="font-size-14 m-0">Total:</h5>
                                                                                </td>
                                                                                <td>
                                                                                    $ 745.2
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script>2023 © webadmin.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="https://themesdesign.com/" target="_blank" class="text-reset">Themesdesign</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>
