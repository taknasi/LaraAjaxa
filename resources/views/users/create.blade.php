@extends('layouts.master')
@section('content')

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container-fluid">
            <!--begin::Contacts App- Add New Contact-->
            <div class="row g-7">


                @include('layouts.alert')
                <!--begin::Content-->
                <div class="">

                    <!--begin::Contacts-->
                    <div class="card card-flush h-lg-100" id="kt_contacts_main">



                        <!--begin::Card header-->
                        <div class="card-header pt-7" id="kt_chat_contacts_header">

                            <!--begin::Card title-->
                            <div class="card-title">

                                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                                <span class="svg-icon svg-icon-1 me-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none">
                                        <path
                                            d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z"
                                            fill="black" />
                                        <path opacity="0.3"
                                            d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z"
                                            fill="black" />
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <h2>Add New Contact</h2>
                            </div>
                            <!--end::Card title-->
                        </div>
                        <!--end::Card header-->
                        <!--begin::Card body-->
                        <div class="card-body pt-5">
                            <!--begin::Form-->
                            <form id="kt_ecommerce_settings_general_form" class="form">

                                <!--begin::Input group-->
                                <div class="mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold mb-3">
                                        <span>Update Avatar</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Allowed file types: png, jpg, jpeg."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Image input wrapper-->
                                    <div class="mt-1">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline" data-kt-image-input="true"
                                            style="background-image: url('assets/media/svg/avatars/blank.svg')">
                                            <!--begin::Preview existing avatar-->
                                            <div class="image-input-wrapper w-100px h-100px"
                                                style="background-image: url('assets/media/svg/avatars/blank.svg')"></div>
                                            <!--end::Preview existing avatar-->
                                            <!--begin::Edit-->
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                title="Change avatar">
                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                <!--begin::Inputs-->
                                                <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                <input type="hidden" name="avatar_remove" />
                                                <!--end::Inputs-->
                                            </label>
                                            <!--end::Edit-->
                                            <!--begin::Cancel-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                title="Cancel avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Cancel-->
                                            <!--begin::Remove-->
                                            <span
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                title="Remove avatar">
                                                <i class="bi bi-x fs-2"></i>
                                            </span>
                                            <!--end::Remove-->
                                        </div>
                                        <!--end::Image input-->
                                    </div>
                                    <!--end::Image input wrapper-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span class="required">Name</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Enter the contact's name."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-solid" name="name" value="" />

                                    
                                    <div id="name_error" class="fv-plugins-message-container invalid-feedback"></div>
                                    
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Row-->
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Email</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Enter the contact's email."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="email" class="form-control form-control-solid" name="email"
                                                value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>Phone</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Enter the contact's phone number (optional)."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="phone"
                                                value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Row-->
                                <div class="row row-cols-1 row-cols-sm-2 rol-cols-md-1 row-cols-lg-2">
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span>City</span>
                                                <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                                    title="Enter the contact's city of residence (optional)."></i>
                                            </label>
                                            <!--end::Label-->
                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-solid" name="city"
                                                value="" />
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-7">
                                            <!--begin::Label-->
                                            <label class="fs-6 fw-bold form-label mt-3">
                                                <span class="required">Country</span>
                                            </label>
                                            <!--end::Label-->
                                            <div class="w-100">
                                                <!--begin::Select2-->
                                                <select class="form-select form-select-solid" name="country"
                                                    data-kt-ecommerce-settings-type="select2_flags"
                                                    data-placeholder="Select a country">
                                                    <option></option>
                                                    <option value="AF" data-kt-select2-country="flags/afghanistan.svg">
                                                        Afghanistan</option>
                                                    <option value="AX" data-kt-select2-country="flags/aland-islands.svg">
                                                        Aland Islands</option>
                                                    <option value="AL" data-kt-select2-country="flags/albania.svg">Albania
                                                    </option>
                                                    <option value="DZ" data-kt-select2-country="flags/algeria.svg">Algeria
                                                    </option>
                                                    <option value="AS" data-kt-select2-country="flags/american-samoa.svg">
                                                        American Samoa</option>
                                                    <option value="AD" data-kt-select2-country="flags/andorra.svg">Andorra
                                                    </option>
                                                    <option value="AO" data-kt-select2-country="flags/angola.svg">Angola
                                                    </option>
                                                    <option value="AI" data-kt-select2-country="flags/anguilla.svg">Anguilla
                                                    </option>
                                                    <option value="AG"
                                                        data-kt-select2-country="flags/antigua-and-barbuda.svg">Antigua and
                                                        Barbuda</option>
                                                    <option value="AR" data-kt-select2-country="flags/argentina.svg">
                                                        Argentina</option>
                                                    <option value="AM" data-kt-select2-country="flags/armenia.svg">Armenia
                                                    </option>
                                                    <option value="AW" data-kt-select2-country="flags/aruba.svg">Aruba
                                                    </option>
                                                    <option value="AU" data-kt-select2-country="flags/australia.svg">
                                                        Australia</option>
                                                    <option value="AT" data-kt-select2-country="flags/austria.svg">Austria
                                                    </option>
                                                    <option value="AZ" data-kt-select2-country="flags/azerbaijan.svg">
                                                        Azerbaijan</option>
                                                    <option value="BS" data-kt-select2-country="flags/bahamas.svg">Bahamas
                                                    </option>
                                                    <option value="BH" data-kt-select2-country="flags/bahrain.svg">Bahrain
                                                    </option>
                                                    <option value="BD" data-kt-select2-country="flags/bangladesh.svg">
                                                        Bangladesh</option>
                                                    <option value="BB" data-kt-select2-country="flags/barbados.svg">Barbados
                                                    </option>
                                                    <option value="BY" data-kt-select2-country="flags/belarus.svg">Belarus
                                                    </option>
                                                    <option value="BE" data-kt-select2-country="flags/belgium.svg">Belgium
                                                    </option>
                                                    <option value="BZ" data-kt-select2-country="flags/belize.svg">Belize
                                                    </option>
                                                    <option value="BJ" data-kt-select2-country="flags/benin.svg">Benin
                                                    </option>
                                                    <option value="BM" data-kt-select2-country="flags/bermuda.svg">Bermuda
                                                    </option>
                                                    <option value="BT" data-kt-select2-country="flags/bhutan.svg">Bhutan
                                                    </option>
                                                    <option value="BO" data-kt-select2-country="flags/bolivia.svg">Bolivia,
                                                        Plurinational State of</option>
                                                    <option value="BQ" data-kt-select2-country="flags/bonaire.svg">Bonaire,
                                                        Sint Eustatius and Saba</option>
                                                    <option value="BA"
                                                        data-kt-select2-country="flags/bosnia-and-herzegovina.svg">Bosnia
                                                        and Herzegovina</option>
                                                    <option value="BW" data-kt-select2-country="flags/botswana.svg">Botswana
                                                    </option>
                                                    <option value="BR" data-kt-select2-country="flags/brazil.svg">Brazil
                                                    </option>
                                                    <option value="IO"
                                                        data-kt-select2-country="flags/british-indian-ocean-territory.svg">
                                                        British Indian Ocean Territory</option>
                                                    <option value="BN" data-kt-select2-country="flags/brunei.svg">Brunei
                                                        Darussalam</option>
                                                    <option value="BG" data-kt-select2-country="flags/bulgaria.svg">Bulgaria
                                                    </option>
                                                    <option value="BF" data-kt-select2-country="flags/burkina-faso.svg">
                                                        Burkina Faso</option>
                                                    <option value="BI" data-kt-select2-country="flags/burundi.svg">Burundi
                                                    </option>
                                                    <option value="KH" data-kt-select2-country="flags/cambodia.svg">Cambodia
                                                    </option>
                                                    <option value="CM" data-kt-select2-country="flags/cameroon.svg">Cameroon
                                                    </option>
                                                    <option value="CA" data-kt-select2-country="flags/canada.svg">Canada
                                                    </option>
                                                    <option value="CV" data-kt-select2-country="flags/cape-verde.svg">Cape
                                                        Verde</option>
                                                    <option value="KY" data-kt-select2-country="flags/cayman-islands.svg">
                                                        Cayman Islands</option>
                                                    <option value="CF"
                                                        data-kt-select2-country="flags/central-african-republic.svg">Central
                                                        African Republic</option>
                                                    <option value="TD" data-kt-select2-country="flags/chad.svg">Chad
                                                    </option>
                                                    <option value="CL" data-kt-select2-country="flags/chile.svg">Chile
                                                    </option>
                                                    <option value="CN" data-kt-select2-country="flags/china.svg">China
                                                    </option>
                                                    <option value="CX" data-kt-select2-country="flags/christmas-island.svg">
                                                        Christmas Island</option>
                                                    <option value="CC" data-kt-select2-country="flags/cocos-island.svg">
                                                        Cocos (Keeling) Islands</option>
                                                    <option value="CO" data-kt-select2-country="flags/colombia.svg">Colombia
                                                    </option>
                                                    <option value="KM" data-kt-select2-country="flags/comoros.svg">Comoros
                                                    </option>
                                                    <option value="CK" data-kt-select2-country="flags/cook-islands.svg">Cook
                                                        Islands</option>
                                                    <option value="CR" data-kt-select2-country="flags/costa-rica.svg">Costa
                                                        Rica</option>
                                                    <option value="CI" data-kt-select2-country="flags/ivory-coast.svg">Côte
                                                        d'Ivoire</option>
                                                    <option value="HR" data-kt-select2-country="flags/croatia.svg">Croatia
                                                    </option>
                                                    <option value="CU" data-kt-select2-country="flags/cuba.svg">Cuba
                                                    </option>
                                                    <option value="CW" data-kt-select2-country="flags/curacao.svg">Curaçao
                                                    </option>
                                                    <option value="CZ" data-kt-select2-country="flags/czech-republic.svg">
                                                        Czech Republic</option>
                                                    <option value="DK" data-kt-select2-country="flags/denmark.svg">Denmark
                                                    </option>
                                                    <option value="DJ" data-kt-select2-country="flags/djibouti.svg">Djibouti
                                                    </option>
                                                    <option value="DM" data-kt-select2-country="flags/dominica.svg">Dominica
                                                    </option>
                                                    <option value="DO"
                                                        data-kt-select2-country="flags/dominican-republic.svg">Dominican
                                                        Republic</option>
                                                    <option value="EC" data-kt-select2-country="flags/ecuador.svg">Ecuador
                                                    </option>
                                                    <option value="EG" data-kt-select2-country="flags/egypt.svg">Egypt
                                                    </option>
                                                    <option value="SV" data-kt-select2-country="flags/el-salvador.svg">El
                                                        Salvador</option>
                                                    <option value="GQ"
                                                        data-kt-select2-country="flags/equatorial-guinea.svg">Equatorial
                                                        Guinea</option>
                                                    <option value="ER" data-kt-select2-country="flags/eritrea.svg">Eritrea
                                                    </option>
                                                    <option value="EE" data-kt-select2-country="flags/estonia.svg">Estonia
                                                    </option>
                                                    <option value="ET" data-kt-select2-country="flags/ethiopia.svg">Ethiopia
                                                    </option>
                                                    <option value="FK" data-kt-select2-country="flags/falkland-islands.svg">
                                                        Falkland Islands (Malvinas)</option>
                                                    <option value="FJ" data-kt-select2-country="flags/fiji.svg">Fiji
                                                    </option>
                                                    <option value="FI" data-kt-select2-country="flags/finland.svg">Finland
                                                    </option>
                                                    <option value="FR" data-kt-select2-country="flags/france.svg">France
                                                    </option>
                                                    <option value="PF" data-kt-select2-country="flags/french-polynesia.svg">
                                                        French Polynesia</option>
                                                    <option value="GA" data-kt-select2-country="flags/gabon.svg">Gabon
                                                    </option>
                                                    <option value="GM" data-kt-select2-country="flags/gambia.svg">Gambia
                                                    </option>
                                                    <option value="GE" data-kt-select2-country="flags/georgia.svg">Georgia
                                                    </option>
                                                    <option value="DE" data-kt-select2-country="flags/germany.svg">Germany
                                                    </option>
                                                    <option value="GH" data-kt-select2-country="flags/ghana.svg">Ghana
                                                    </option>
                                                    <option value="GI" data-kt-select2-country="flags/gibraltar.svg">
                                                        Gibraltar</option>
                                                    <option value="GR" data-kt-select2-country="flags/greece.svg">Greece
                                                    </option>
                                                    <option value="GL" data-kt-select2-country="flags/greenland.svg">
                                                        Greenland</option>
                                                    <option value="GD" data-kt-select2-country="flags/grenada.svg">Grenada
                                                    </option>
                                                    <option value="GU" data-kt-select2-country="flags/guam.svg">Guam
                                                    </option>
                                                    <option value="GT" data-kt-select2-country="flags/guatemala.svg">
                                                        Guatemala</option>
                                                    <option value="GG" data-kt-select2-country="flags/guernsey.svg">Guernsey
                                                    </option>
                                                    <option value="GN" data-kt-select2-country="flags/guinea.svg">Guinea
                                                    </option>
                                                    <option value="GW" data-kt-select2-country="flags/guinea-bissau.svg">
                                                        Guinea-Bissau</option>
                                                    <option value="HT" data-kt-select2-country="flags/haiti.svg">Haiti
                                                    </option>
                                                    <option value="VA" data-kt-select2-country="flags/vatican-city.svg">Holy
                                                        See (Vatican City State)</option>
                                                    <option value="HN" data-kt-select2-country="flags/honduras.svg">Honduras
                                                    </option>
                                                    <option value="HK" data-kt-select2-country="flags/hong-kong.svg">Hong
                                                        Kong</option>
                                                    <option value="HU" data-kt-select2-country="flags/hungary.svg">Hungary
                                                    </option>
                                                    <option value="IS" data-kt-select2-country="flags/iceland.svg">Iceland
                                                    </option>
                                                    <option value="IN" data-kt-select2-country="flags/india.svg">India
                                                    </option>
                                                    <option value="ID" data-kt-select2-country="flags/indonesia.svg">
                                                        Indonesia</option>
                                                    <option value="IR" data-kt-select2-country="flags/iran.svg">Iran,
                                                        Islamic Republic of</option>
                                                    <option value="IQ" data-kt-select2-country="flags/iraq.svg">Iraq
                                                    </option>
                                                    <option value="IE" data-kt-select2-country="flags/ireland.svg">Ireland
                                                    </option>
                                                    <option value="IM" data-kt-select2-country="flags/isle-of-man.svg">Isle
                                                        of Man</option>
                                                    <option value="IL" data-kt-select2-country="flags/israel.svg">Israel
                                                    </option>
                                                    <option value="IT" data-kt-select2-country="flags/italy.svg">Italy
                                                    </option>
                                                    <option value="JM" data-kt-select2-country="flags/jamaica.svg">Jamaica
                                                    </option>
                                                    <option value="JP" data-kt-select2-country="flags/japan.svg">Japan
                                                    </option>
                                                    <option value="JE" data-kt-select2-country="flags/jersey.svg">Jersey
                                                    </option>
                                                    <option value="JO" data-kt-select2-country="flags/jordan.svg">Jordan
                                                    </option>
                                                    <option value="KZ" data-kt-select2-country="flags/kazakhstan.svg">
                                                        Kazakhstan</option>
                                                    <option value="KE" data-kt-select2-country="flags/kenya.svg">Kenya
                                                    </option>
                                                    <option value="KI" data-kt-select2-country="flags/kiribati.svg">Kiribati
                                                    </option>
                                                    <option value="KP" data-kt-select2-country="flags/north-korea.svg">
                                                        Korea, Democratic People's Republic of</option>
                                                    <option value="KW" data-kt-select2-country="flags/kuwait.svg">Kuwait
                                                    </option>
                                                    <option value="KG" data-kt-select2-country="flags/kyrgyzstan.svg">
                                                        Kyrgyzstan</option>
                                                    <option value="LA" data-kt-select2-country="flags/laos.svg">Lao People's
                                                        Democratic Republic</option>
                                                    <option value="LV" data-kt-select2-country="flags/latvia.svg">Latvia
                                                    </option>
                                                    <option value="LB" data-kt-select2-country="flags/lebanon.svg">Lebanon
                                                    </option>
                                                    <option value="LS" data-kt-select2-country="flags/lesotho.svg">Lesotho
                                                    </option>
                                                    <option value="LR" data-kt-select2-country="flags/liberia.svg">Liberia
                                                    </option>
                                                    <option value="LY" data-kt-select2-country="flags/libya.svg">Libya
                                                    </option>
                                                    <option value="LI" data-kt-select2-country="flags/liechtenstein.svg">
                                                        Liechtenstein</option>
                                                    <option value="LT" data-kt-select2-country="flags/lithuania.svg">
                                                        Lithuania</option>
                                                    <option value="LU" data-kt-select2-country="flags/luxembourg.svg">
                                                        Luxembourg</option>
                                                    <option value="MO" data-kt-select2-country="flags/macao.svg">Macao
                                                    </option>
                                                    <option value="MG" data-kt-select2-country="flags/madagascar.svg">
                                                        Madagascar</option>
                                                    <option value="MW" data-kt-select2-country="flags/malawi.svg">Malawi
                                                    </option>
                                                    <option value="MY" data-kt-select2-country="flags/malaysia.svg">Malaysia
                                                    </option>
                                                    <option value="MV" data-kt-select2-country="flags/maldives.svg">Maldives
                                                    </option>
                                                    <option value="ML" data-kt-select2-country="flags/mali.svg">Mali
                                                    </option>
                                                    <option value="MT" data-kt-select2-country="flags/malta.svg">Malta
                                                    </option>
                                                    <option value="MH" data-kt-select2-country="flags/marshall-island.svg">
                                                        Marshall Islands</option>
                                                    <option value="MQ" data-kt-select2-country="flags/martinique.svg">
                                                        Martinique</option>
                                                    <option value="MR" data-kt-select2-country="flags/mauritania.svg">
                                                        Mauritania</option>
                                                    <option value="MU" data-kt-select2-country="flags/mauritius.svg">
                                                        Mauritius</option>
                                                    <option value="MX" data-kt-select2-country="flags/mexico.svg">Mexico
                                                    </option>
                                                    <option value="FM" data-kt-select2-country="flags/micronesia.svg">
                                                        Micronesia, Federated States of</option>
                                                    <option value="MD" data-kt-select2-country="flags/moldova.svg">Moldova,
                                                        Republic of</option>
                                                    <option value="MC" data-kt-select2-country="flags/monaco.svg">Monaco
                                                    </option>
                                                    <option value="MN" data-kt-select2-country="flags/mongolia.svg">Mongolia
                                                    </option>
                                                    <option value="ME" data-kt-select2-country="flags/montenegro.svg">
                                                        Montenegro</option>
                                                    <option value="MS" data-kt-select2-country="flags/montserrat.svg">
                                                        Montserrat</option>
                                                    <option value="MA" data-kt-select2-country="flags/morocco.svg">Morocco
                                                    </option>
                                                    <option value="MZ" data-kt-select2-country="flags/mozambique.svg">
                                                        Mozambique</option>
                                                    <option value="MM" data-kt-select2-country="flags/myanmar.svg">Myanmar
                                                    </option>
                                                    <option value="NA" data-kt-select2-country="flags/namibia.svg">Namibia
                                                    </option>
                                                    <option value="NR" data-kt-select2-country="flags/nauru.svg">Nauru
                                                    </option>
                                                    <option value="NP" data-kt-select2-country="flags/nepal.svg">Nepal
                                                    </option>
                                                    <option value="NL" data-kt-select2-country="flags/netherlands.svg">
                                                        Netherlands</option>
                                                    <option value="NZ" data-kt-select2-country="flags/new-zealand.svg">New
                                                        Zealand</option>
                                                    <option value="NI" data-kt-select2-country="flags/nicaragua.svg">
                                                        Nicaragua</option>
                                                    <option value="NE" data-kt-select2-country="flags/niger.svg">Niger
                                                    </option>
                                                    <option value="NG" data-kt-select2-country="flags/nigeria.svg">Nigeria
                                                    </option>
                                                    <option value="NU" data-kt-select2-country="flags/niue.svg">Niue
                                                    </option>
                                                    <option value="NF" data-kt-select2-country="flags/norfolk-island.svg">
                                                        Norfolk Island</option>
                                                    <option value="MP"
                                                        data-kt-select2-country="flags/northern-mariana-islands.svg">
                                                        Northern Mariana Islands</option>
                                                    <option value="NO" data-kt-select2-country="flags/norway.svg">Norway
                                                    </option>
                                                    <option value="OM" data-kt-select2-country="flags/oman.svg">Oman
                                                    </option>
                                                    <option value="PK" data-kt-select2-country="flags/pakistan.svg">Pakistan
                                                    </option>
                                                    <option value="PW" data-kt-select2-country="flags/palau.svg">Palau
                                                    </option>
                                                    <option value="PS" data-kt-select2-country="flags/palestine.svg">
                                                        Palestinian Territory, Occupied</option>
                                                    <option value="PA" data-kt-select2-country="flags/panama.svg">Panama
                                                    </option>
                                                    <option value="PG" data-kt-select2-country="flags/papua-new-guinea.svg">
                                                        Papua New Guinea</option>
                                                    <option value="PY" data-kt-select2-country="flags/paraguay.svg">Paraguay
                                                    </option>
                                                    <option value="PE" data-kt-select2-country="flags/peru.svg">Peru
                                                    </option>
                                                    <option value="PH" data-kt-select2-country="flags/philippines.svg">
                                                        Philippines</option>
                                                    <option value="PL" data-kt-select2-country="flags/poland.svg">Poland
                                                    </option>
                                                    <option value="PT" data-kt-select2-country="flags/portugal.svg">Portugal
                                                    </option>
                                                    <option value="PR" data-kt-select2-country="flags/puerto-rico.svg">
                                                        Puerto Rico</option>
                                                    <option value="QA" data-kt-select2-country="flags/qatar.svg">Qatar
                                                    </option>
                                                    <option value="RO" data-kt-select2-country="flags/romania.svg">Romania
                                                    </option>
                                                    <option value="RU" data-kt-select2-country="flags/russia.svg">Russian
                                                        Federation</option>
                                                    <option value="RW" data-kt-select2-country="flags/rwanda.svg">Rwanda
                                                    </option>
                                                    <option value="BL" data-kt-select2-country="flags/st-barts.svg">Saint
                                                        Barthélemy</option>
                                                    <option value="KN"
                                                        data-kt-select2-country="flags/saint-kitts-and-nevis.svg">Saint
                                                        Kitts and Nevis</option>
                                                    <option value="LC" data-kt-select2-country="flags/st-lucia.svg">Saint
                                                        Lucia</option>
                                                    <option value="MF" data-kt-select2-country="flags/sint-maarten.svg">
                                                        Saint Martin (French part)</option>
                                                    <option value="VC"
                                                        data-kt-select2-country="flags/st-vincent-and-the-grenadines.svg">
                                                        Saint Vincent and the Grenadines</option>
                                                    <option value="WS" data-kt-select2-country="flags/samoa.svg">Samoa
                                                    </option>
                                                    <option value="SM" data-kt-select2-country="flags/san-marino.svg">San
                                                        Marino</option>
                                                    <option value="ST"
                                                        data-kt-select2-country="flags/sao-tome-and-prince.svg">Sao Tome and
                                                        Principe</option>
                                                    <option value="SA" data-kt-select2-country="flags/saudi-arabia.svg">
                                                        Saudi Arabia</option>
                                                    <option value="SN" data-kt-select2-country="flags/senegal.svg">Senegal
                                                    </option>
                                                    <option value="RS" data-kt-select2-country="flags/serbia.svg">Serbia
                                                    </option>
                                                    <option value="SC" data-kt-select2-country="flags/seychelles.svg">
                                                        Seychelles</option>
                                                    <option value="SL" data-kt-select2-country="flags/sierra-leone.svg">
                                                        Sierra Leone</option>
                                                    <option value="SG" data-kt-select2-country="flags/singapore.svg">
                                                        Singapore</option>
                                                    <option value="SX" data-kt-select2-country="flags/sint-maarten.svg">Sint
                                                        Maarten (Dutch part)</option>
                                                    <option value="SK" data-kt-select2-country="flags/slovakia.svg">Slovakia
                                                    </option>
                                                    <option value="SI" data-kt-select2-country="flags/slovenia.svg">Slovenia
                                                    </option>
                                                    <option value="SB" data-kt-select2-country="flags/solomon-islands.svg">
                                                        Solomon Islands</option>
                                                    <option value="SO" data-kt-select2-country="flags/somalia.svg">Somalia
                                                    </option>
                                                    <option value="ZA" data-kt-select2-country="flags/south-africa.svg">
                                                        South Africa</option>
                                                    <option value="KR" data-kt-select2-country="flags/south-korea.svg">South
                                                        Korea</option>
                                                    <option value="SS" data-kt-select2-country="flags/south-sudan.svg">South
                                                        Sudan</option>
                                                    <option value="ES" data-kt-select2-country="flags/spain.svg">Spain
                                                    </option>
                                                    <option value="LK" data-kt-select2-country="flags/sri-lanka.svg">Sri
                                                        Lanka</option>
                                                    <option value="SD" data-kt-select2-country="flags/sudan.svg">Sudan
                                                    </option>
                                                    <option value="SR" data-kt-select2-country="flags/suriname.svg">Suriname
                                                    </option>
                                                    <option value="SZ" data-kt-select2-country="flags/swaziland.svg">
                                                        Swaziland</option>
                                                    <option value="SE" data-kt-select2-country="flags/sweden.svg">Sweden
                                                    </option>
                                                    <option value="CH" data-kt-select2-country="flags/switzerland.svg">
                                                        Switzerland</option>
                                                    <option value="SY" data-kt-select2-country="flags/syria.svg">Syrian Arab
                                                        Republic</option>
                                                    <option value="TW" data-kt-select2-country="flags/taiwan.svg">Taiwan,
                                                        Province of China</option>
                                                    <option value="TJ" data-kt-select2-country="flags/tajikistan.svg">
                                                        Tajikistan</option>
                                                    <option value="TZ" data-kt-select2-country="flags/tanzania.svg">
                                                        Tanzania, United Republic of</option>
                                                    <option value="TH" data-kt-select2-country="flags/thailand.svg">Thailand
                                                    </option>
                                                    <option value="TG" data-kt-select2-country="flags/togo.svg">Togo
                                                    </option>
                                                    <option value="TK" data-kt-select2-country="flags/tokelau.svg">Tokelau
                                                    </option>
                                                    <option value="TO" data-kt-select2-country="flags/tonga.svg">Tonga
                                                    </option>
                                                    <option value="TT"
                                                        data-kt-select2-country="flags/trinidad-and-tobago.svg">Trinidad and
                                                        Tobago</option>
                                                    <option value="TN" data-kt-select2-country="flags/tunisia.svg">Tunisia
                                                    </option>
                                                    <option value="TR" data-kt-select2-country="flags/turkey.svg">Turkey
                                                    </option>
                                                    <option value="TM" data-kt-select2-country="flags/turkmenistan.svg">
                                                        Turkmenistan</option>
                                                    <option value="TC" data-kt-select2-country="flags/turks-and-caicos.svg">
                                                        Turks and Caicos Islands</option>
                                                    <option value="TV" data-kt-select2-country="flags/tuvalu.svg">Tuvalu
                                                    </option>
                                                    <option value="UG" data-kt-select2-country="flags/uganda.svg">Uganda
                                                    </option>
                                                    <option value="UA" data-kt-select2-country="flags/ukraine.svg">Ukraine
                                                    </option>
                                                    <option value="AE"
                                                        data-kt-select2-country="flags/united-arab-emirates.svg">United Arab
                                                        Emirates</option>
                                                    <option value="GB" data-kt-select2-country="flags/united-kingdom.svg">
                                                        United Kingdom</option>
                                                    <option value="US" data-kt-select2-country="flags/united-states.svg">
                                                        United States</option>
                                                    <option value="UY" data-kt-select2-country="flags/uruguay.svg">Uruguay
                                                    </option>
                                                    <option value="UZ" data-kt-select2-country="flags/uzbekistan.svg">
                                                        Uzbekistan</option>
                                                    <option value="VU" data-kt-select2-country="flags/vanuatu.svg">Vanuatu
                                                    </option>
                                                    <option value="VE" data-kt-select2-country="flags/venezuela.svg">
                                                        Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN" data-kt-select2-country="flags/vietnam.svg">Vietnam
                                                    </option>
                                                    <option value="VI" data-kt-select2-country="flags/virgin-islands.svg">
                                                        Virgin Islands</option>
                                                    <option value="YE" data-kt-select2-country="flags/yemen.svg">Yemen
                                                    </option>
                                                    <option value="ZM" data-kt-select2-country="flags/zambia.svg">Zambia
                                                    </option>
                                                    <option value="ZW" data-kt-select2-country="flags/zimbabwe.svg">Zimbabwe
                                                    </option>
                                                </select>
                                                <!--end::Select2-->
                                            </div>
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->
                                <!--begin::Input group-->
                                <div class="fv-row mb-7">
                                    <!--begin::Label-->
                                    <label class="fs-6 fw-bold form-label mt-3">
                                        <span>Notes</span>
                                        <i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip"
                                            title="Enter any additional notes about the contact (optional)."></i>
                                    </label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <textarea class="form-control form-control-solid" name="notes"></textarea>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Separator-->
                                <div class="separator mb-6"></div>
                                <!--end::Separator-->
                                <!--begin::Action buttons-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Button-->
                                    <button type="reset" data-kt-contacts-type="cancel"
                                        class="btn btn-light me-3">Cancel</button>
                                    <!--end::Button-->
                                    <!--begin::Button-->
                                    <a class="btn btn-primary" id="save">
                                        <span class="indicator-label">Save</span>
                                        <span class="indicator-progress">Please wait...
                                            <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                    </a>
                                    <!--end::Button-->
                                </div>
                                <!--end::Action buttons-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Contacts-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Contacts App- Add New Contact-->
        </div>
        <!--end::Container-->
    </div>
@stop
<script src="{{ URL::asset('assets/jquery-3.1.1.min.js') }}"></script>
@section('script')
    <script>
        $(document).on('click', '#save', function(e) {
            e.preventDefault();

            $.ajax({
                type: 'post',
                url: "{{ route('users.store') }}",
                data: {
                    '_token': "{{ csrf_token() }}",
                    'name': $("input[name='name']").val(),
                    'email': $("input[name='email']").val(),
                    'phone': $("input[name='phone']").val(),
                    'city': $("input[name='city']").val(),
                    'country': $("select[name='country']").val(),
                    'notes': $("textarea[name='notes']").val(),
                },
                success: function(data) {
                    if (data.status == true) {
                        $('#myalert').show();
                    }
                },
                error: function(reject) {
                    var respose=$.parseJSON(reject.responseText);
                    $.each(respose.errors,function(key,val)
                    {
                        $("#"+key+"_error").text(val[0]);
                    }
                    );
                }
            })
        });
    </script>
@stop
