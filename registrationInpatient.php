<?php
  require_once("include/header.php")
?>

<div class="row">

    <div class="col-12 col-xl-8 mb-4 mb-xl-0">
        <h3 class="font-weight-bold text-primary mb-2">REGISTRATION</h3>
        <p class="mb-2 text-secondary">Registration for In-patient</p>
    </div>
    <div class="col-md-12 mt-4">
        <div class="card" style="border:1px solid #a4aec4">
            <div class="card-body">
                <form class="forms-sample" action="#" method="POST" id="addPatient" enctype="multipart/form-data">
                    <input type="hidden" name="" value="">
                    <div class="row">
                        <div class="col-md-12">
                            <h6 class="text-uppercase font-weight-bold">Details of Patient :</h6>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="name">Name <span class="text-danger"> *</span> </label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Enter patient's name" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="phone">Phone <span class="text-danger"> *</span></label>
                                        <input type="text" name="phone" class="form-control" id="phone"
                                            placeholder="Enter patient's phone number" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="text" name="email" class="form-control" id="email"
                                            placeholder="Enter patient's email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="age">Age (years) <span class="text-danger"> *</span> </label>
                                        <input type="text" name="age" class="form-control" id="age" value=""
                                            placeholder="Enter patient's age">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="gender">Gender <span class="text-danger"> *</span></label>
                                        <select name="gender" class="form-control" id="gender" required>
                                            <option value="">Select gender</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="O">Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="maritalStatus">Marital Status</label>
                                        <select name="marital_status" class="form-control" id="maritalStatus" required>
                                            <option value="">Select Marital Status</option>
                                            <option value="Single">Single</option>
                                            <option value="Married">Married</option>
                                            <option value="Widowed">Widowed</option>
                                            <option value="Separated">Separated</option>
                                            <option value="Divorced">Divorced</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="nationality">Nationality <span class="text-danger"> *</span> </label>
                                <select name="nationality_id" class="form-control js-example-basic-single"
                                    id="nationality" required>
                                    <option value="">Select Nationality</option>
                                    <option value="1">Afghan</option>
                                    <option value="2">Åland Island</option>
                                    <option value="3">Albanian</option>
                                    <option value="4">Algerian</option>
                                    <option value="5">American Samoan</option>
                                    <option value="6">Andorran</option>
                                    <option value="7">Angolan</option>
                                    <option value="8">Anguillan</option>
                                    <option value="9">Antarctic</option>
                                    <option value="10">Antiguan or Barbudan</option>
                                    <option value="11">Argentine</option>
                                    <option value="12">Armenian</option>
                                    <option value="13">Aruban</option>
                                    <option value="14">Australian</option>
                                    <option value="15">Austrian</option>
                                    <option value="16">Azerbaijani, Azeri</option>
                                    <option value="17">Bahamian</option>
                                    <option value="18">Bahraini</option>
                                    <option value="19">Bangladeshi</option>
                                    <option value="20">Barbadian</option>
                                    <option value="21">Belarusian</option>
                                    <option value="22">Belgian</option>
                                    <option value="23">Belizean</option>
                                    <option value="24">Beninese, Beninois</option>
                                    <option value="25">Bermudian, Bermudan</option>
                                    <option value="26">Bhutanese</option>
                                    <option value="27">Bolivian</option>
                                    <option value="28">Bonaire</option>
                                    <option value="29">Bosnian or Herzegovinian</option>
                                    <option value="30">Motswana, Botswanan</option>
                                    <option value="31">Bouvet Island</option>
                                    <option value="32">Brazilian</option>
                                    <option value="33">BIOT</option>
                                    <option value="34">Bruneian</option>
                                    <option value="35">Bulgarian</option>
                                    <option value="36">Burkinabé</option>
                                    <option value="37">Burundian</option>
                                    <option value="38">Cabo Verdean</option>
                                    <option value="39">Cambodian</option>
                                    <option value="40">Cameroonian</option>
                                    <option value="41">Canadian</option>
                                    <option value="42">Caymanian</option>
                                    <option value="43">Central African</option>
                                    <option value="44">Chadian</option>
                                    <option value="45">Chilean</option>
                                    <option value="46">Chinese</option>
                                    <option value="47">Christmas Island</option>
                                    <option value="48">Cocos Island</option>
                                    <option value="49">Colombian</option>
                                    <option value="50">Comoran, Comorian</option>
                                    <option value="51">Congolese</option>
                                    <option value="52">Congolese</option>
                                    <option value="53">Cook Island</option>
                                    <option value="54">Costa Rican</option>
                                    <option value="55">Ivorian</option>
                                    <option value="56">Croatian</option>
                                    <option value="57">Cuban</option>
                                    <option value="58">Curaçaoan</option>
                                    <option value="59">Cypriot</option>
                                    <option value="60">Czech</option>
                                    <option value="61">Danish</option>
                                    <option value="62">Djiboutian</option>
                                    <option value="63">Dominican</option>
                                    <option value="64">Dominican</option>
                                    <option value="65">Ecuadorian</option>
                                    <option value="66">Egyptian</option>
                                    <option value="67">Salvadoran</option>
                                    <option value="68">Equatorial Guinean, Equatoguinean</option>
                                    <option value="69">Eritrean</option>
                                    <option value="70">Estonian</option>
                                    <option value="71">Ethiopian</option>
                                    <option value="72">Falkland Island</option>
                                    <option value="73">Faroese</option>
                                    <option value="74">Fijian</option>
                                    <option value="75">Finnish</option>
                                    <option value="76">French</option>
                                    <option value="77">French Guianese</option>
                                    <option value="78">French Polynesian</option>
                                    <option value="79">French Southern Territories</option>
                                    <option value="80">Gabonese</option>
                                    <option value="81">Gambian</option>
                                    <option value="82">Georgian</option>
                                    <option value="83">German</option>
                                    <option value="84">Ghanaian</option>
                                    <option value="85">Gibraltar</option>
                                    <option value="86">Greek, Hellenic</option>
                                    <option value="87">Greenlandic</option>
                                    <option value="88">Grenadian</option>
                                    <option value="89">Guadeloupe</option>
                                    <option value="90">Guamanian, Guambat</option>
                                    <option value="91">Guatemalan</option>
                                    <option value="92">Channel Island</option>
                                    <option value="93">Guinean</option>
                                    <option value="94">Bissau-Guinean</option>
                                    <option value="95">Guyanese</option>
                                    <option value="96">Haitian</option>
                                    <option value="97">Heard Island or McDonald Islands</option>
                                    <option value="98">Vatican</option>
                                    <option value="99">Honduran</option>
                                    <option value="100">Hong Kong, Hong Kongese</option>
                                    <option value="101">Hungarian, Magyar</option>
                                    <option value="102">Icelandic</option>
                                    <option value="103">Indian</option>
                                    <option value="104">Indonesian</option>
                                    <option value="105">Iranian, Persian</option>
                                    <option value="106">Iraqi</option>
                                    <option value="107">Irish</option>
                                    <option value="108">Manx</option>
                                    <option value="109">Israeli</option>
                                    <option value="110">Italian</option>
                                    <option value="111">Jamaican</option>
                                    <option value="112">Japanese</option>
                                    <option value="113">Channel Island</option>
                                    <option value="114">Jordanian</option>
                                    <option value="115">Kazakhstani, Kazakh</option>
                                    <option value="116">Kenyan</option>
                                    <option value="117">I-Kiribati</option>
                                    <option value="118">North Korean</option>
                                    <option value="119">South Korean</option>
                                    <option value="120">Kuwaiti</option>
                                    <option value="121">Kyrgyzstani, Kyrgyz, Kirgiz, Kirghiz</option>
                                    <option value="122">Lao, Laotian</option>
                                    <option value="123">Latvian</option>
                                    <option value="124">Lebanese</option>
                                    <option value="125">Basotho</option>
                                    <option value="126">Liberian</option>
                                    <option value="127">Libyan</option>
                                    <option value="128">Liechtenstein</option>
                                    <option value="129">Lithuanian</option>
                                    <option value="130">Luxembourg, Luxembourgish</option>
                                    <option value="131">Macanese, Chinese</option>
                                    <option value="132">Macedonian</option>
                                    <option value="133">Malagasy</option>
                                    <option value="134">Malawian</option>
                                    <option value="135">Malaysian</option>
                                    <option value="136">Maldivian</option>
                                    <option value="137">Malian, Malinese</option>
                                    <option value="138">Maltese</option>
                                    <option value="139">Marshallese</option>
                                    <option value="140">Martiniquais, Martinican</option>
                                    <option value="141">Mauritanian</option>
                                    <option value="142">Mauritian</option>
                                    <option value="143">Mahoran</option>
                                    <option value="144">Mexican</option>
                                    <option value="145">Micronesian</option>
                                    <option value="146">Moldovan</option>
                                    <option value="147">Monégasque, Monacan</option>
                                    <option value="148">Mongolian</option>
                                    <option value="149">Montenegrin</option>
                                    <option value="150">Montserratian</option>
                                    <option value="151">Moroccan</option>
                                    <option value="152">Mozambican</option>
                                    <option value="153">Burmese</option>
                                    <option value="154">Namibian</option>
                                    <option value="155">Nauruan</option>
                                    <option value="156">Nepali, Nepalese</option>
                                    <option value="157">Dutch, Netherlandic</option>
                                    <option value="158">New Caledonian</option>
                                    <option value="159">New Zealand, NZ</option>
                                    <option value="160">Nicaraguan</option>
                                    <option value="161">Nigerien</option>
                                    <option value="162">Nigerian</option>
                                    <option value="163">Niuean</option>
                                    <option value="164">Norfolk Island</option>
                                    <option value="165">Northern Marianan</option>
                                    <option value="166">Norwegian</option>
                                    <option value="167">Omani</option>
                                    <option value="168">Pakistani</option>
                                    <option value="169">Palauan</option>
                                    <option value="170">Palestinian</option>
                                    <option value="171">Panamanian</option>
                                    <option value="172">Papua New Guinean, Papuan</option>
                                    <option value="173">Paraguayan</option>
                                    <option value="174">Peruvian</option>
                                    <option value="175">Philippine, Filipino</option>
                                    <option value="176">Pitcairn Island</option>
                                    <option value="177">Polish</option>
                                    <option value="178">Portuguese</option>
                                    <option value="179">Puerto Rican</option>
                                    <option value="180">Qatari</option>
                                    <option value="181">Réunionese, Réunionnais</option>
                                    <option value="182">Romanian</option>
                                    <option value="183">Russian</option>
                                    <option value="184">Rwandan</option>
                                    <option value="185">Barthélemois</option>
                                    <option value="186">Saint Helenian</option>
                                    <option value="187">Kittitian or Nevisian</option>
                                    <option value="188">Saint Lucian</option>
                                    <option value="189">Saint-Martinoise</option>
                                    <option value="190">Saint-Pierrais or Miquelonnais</option>
                                    <option value="191">Saint Vincentian, Vincentian</option>
                                    <option value="192">Samoan</option>
                                    <option value="193">Sammarinese</option>
                                    <option value="194">São Toméan</option>
                                    <option value="195">Saudi, Saudi Arabian</option>
                                    <option value="196">Senegalese</option>
                                    <option value="197">Serbian</option>
                                    <option value="198">Seychellois</option>
                                    <option value="199">Sierra Leonean</option>
                                    <option value="200">Singaporean</option>
                                    <option value="201">Sint Maarten</option>
                                    <option value="202">Slovak</option>
                                    <option value="203">Slovenian, Slovene</option>
                                    <option value="204">Solomon Island</option>
                                    <option value="205">Somali, Somalian</option>
                                    <option value="206">South African</option>
                                    <option value="207">South Georgia or South Sandwich Islands</option>
                                    <option value="208">South Sudanese</option>
                                    <option value="209">Spanish</option>
                                    <option value="210">Sri Lankan</option>
                                    <option value="211">Sudanese</option>
                                    <option value="212">Surinamese</option>
                                    <option value="213">Svalbard</option>
                                    <option value="214">Swazi</option>
                                    <option value="215">Swedish</option>
                                    <option value="216">Swiss</option>
                                    <option value="217">Syrian</option>
                                    <option value="218">Chinese, Taiwanese</option>
                                    <option value="219">Tajikistani</option>
                                    <option value="220">Tanzanian</option>
                                    <option value="221">Thai</option>
                                    <option value="222">Timorese</option>
                                    <option value="223">Togolese</option>
                                    <option value="224">Tokelauan</option>
                                    <option value="225">Tongan</option>
                                    <option value="226">Trinidadian or Tobagonian</option>
                                    <option value="227">Tunisian</option>
                                    <option value="228">Turkish</option>
                                    <option value="229">Turkmen</option>
                                    <option value="230">Turks and Caicos Island</option>
                                    <option value="231">Tuvaluan</option>
                                    <option value="232">Ugandan</option>
                                    <option value="233">Ukrainian</option>
                                    <option value="234">Emirati, Emirian, Emiri</option>
                                    <option value="235">British, UK</option>
                                    <option value="236">American</option>
                                    <option value="237">American</option>
                                    <option value="238">Uruguayan</option>
                                    <option value="239">Uzbekistani, Uzbek</option>
                                    <option value="240">Ni-Vanuatu, Vanuatuan</option>
                                    <option value="241">Venezuelan</option>
                                    <option value="242">Vietnamese</option>
                                    <option value="243">British Virgin Island</option>
                                    <option value="244">U.S. Virgin Island</option>
                                    <option value="245">Wallis and Futuna, Wallisian or Futunan</option>
                                    <option value="246">Sahrawi, Sahrawian, Sahraouian</option>
                                    <option value="247">Yemeni</option>
                                    <option value="248">Zambian</option>
                                    <option value="249">Zimbabwean</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="state">State <span class="text-danger"> *</span></label>
                                <select name="state_id" class="form-control js-example-basic-single w-100" id="state"
                                    required>
                                    <option value="">Select State</option>
                                    <option value="1">Andaman &amp; Nicobar Islands</option>
                                    <option value="2">Andhra Pradesh</option>
                                    <option value="3">Arunachal Pradesh</option>
                                    <option value="4">Assam</option>
                                    <option value="5">Bihar</option>
                                    <option value="6">Chandigarh</option>
                                    <option value="7">Chhattisgarh</option>
                                    <option value="8">Dadra &amp; Nagar Haveli</option>
                                    <option value="9">Daman &amp; Diu</option>
                                    <option value="10">Delhi</option>
                                    <option value="11">Goa</option>
                                    <option value="12">Gujarat</option>
                                    <option value="13">Haryana</option>
                                    <option value="14">Himachal Pradesh</option>
                                    <option value="15">Jammu &amp; Kashmir</option>
                                    <option value="16">Jharkhand</option>
                                    <option value="17">Karnataka</option>
                                    <option value="18">Kerala</option>
                                    <option value="19">Lakshadweep</option>
                                    <option value="20">Madhya Pradesh</option>
                                    <option value="21">Maharashtra</option>
                                    <option value="22">Manipur</option>
                                    <option value="23">Meghalaya</option>
                                    <option value="24">Mizoram</option>
                                    <option value="25">Nagaland</option>
                                    <option value="26">Odisha</option>
                                    <option value="27">Puducherry</option>
                                    <option value="28">Punjab</option>
                                    <option value="29">Rajasthan</option>
                                    <option value="30">Sikkim</option>
                                    <option value="31">Tamil Nadu</option>
                                    <option value="32">Tripura</option>
                                    <option value="33">Uttar Pradesh</option>
                                    <option value="34">Uttarakhand</option>
                                    <option value="35">West Bengal</option>
                                </select>

                            </div>

                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="district">District <span class="text-danger"> *</span></label>
                                <select name="district_id" class="form-control js-example-basic-single" id="district"
                                    required>
                                    <option value="">Select District</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">


                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="pincode">PIN Code <span class="text-danger"> *</span></label>
                                <input type="number" name="pincode" maxlength="6" class="form-control" id="pincode"
                                    placeholder="Enter pincode">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="city">Village / City</label>
                                <input type="text" name="city" class="form-control" id="city"
                                    placeholder="Enter city or village">
                            </div>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">Address Line 1</label>
                                    <input type="text" name="city" class="form-control" id="city"
                                        placeholder="Address Line 1">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">Address Line 2</label>
                                    <input type="text" name="" class="form-control" id="city"
                                        placeholder="Address Line 2">
                                </div>
                            </div>
                        

                    </div>

                    <hr>
                    <h6 class="text-uppercase font-weight-bold mb-1">More Details of Patient :</h6>

                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="attendent">Blood Pressure </label>
                                <input type="text" name="" class="form-control" id=""
                                    placeholder="Enter Blood Pressure">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="weight">Weight</label>
                                <input type="text" name="" class="form-control" id="" placeholder="Enter the Weight">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="height">Height (optional)</label>
                                <input type="text" name="" class="form-control" id="attendentPhone"
                                    placeholder="Enter the Height">
                            </div>
                        </div>

                    </div>
                    <h6 class="text-uppercase mt-1 mb-1 font-weight-bold">Details of Attendee :</h6>

                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="attendent">Attendent Name </label>
                                <input type="text" name="attendent" class="form-control" id="attendent"
                                    placeholder="Enter attendent name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="attendentPhone">Attendent's Phone No </label>
                                <input type="text" name="attendent_phone" class="form-control" id="attendentPhone"
                                    placeholder="Enter attendent phone">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="attendentRel">Attendent's Relation </label>
                                <select name="attendent_rel[]" class="form-control js-example-basic-single"
                                    id="attendentRel">
                                    <option value="">Select Attendent's Relation</option>
                                    <option value="Grand Father">Grand Father</option>
                                    <option value="Grand Mother">Grand Mother</option>
                                    <option value="Father">Father</option>
                                    <option value="Mother">Mother</option>
                                    <option value="Brother">Brother</option>
                                    <option value="Sister">Sister</option>
                                    <option value="Friend">Friend</option>
                                    <option value="Uncle">Uncle</option>
                                    <option value="Aunt">Aunt</option>
                                    <option value="Others">Others(Please Specify)</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-4 attendent-rel-1 d-none">
                            <div class="form-group">
                                <label for="attendentRel1">Attendent Relation (other) </label>
                                <input type="text" name="attendent_rel[]" class="form-control" id="attendentRel1"
                                    placeholder="Enter attendent's relation">
                            </div>
                        </div>

                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12 text-center mb-4">
                            <!-- <button type="submit" class="btn btn-primary " id="submit">Submit</button> -->
                            <a href="selectDoctor.php" class="btn btn-primary">Save</a>
                            <button type="#" class="btn btn-danger " id="cancel">Cancel</button>
                        </div>
                    </div>


                </form>

            </div>
        </div>
    </div>
</div>



<?php
  require_once("include/footer.php")
?>