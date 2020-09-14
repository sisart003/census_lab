<form action="add-hansen.php" method="post">
<table id="hansen" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th><input type="hidden" name="hansen" value="hansen"></th>
                <th colspan="2">OPD</th>
                <th colspan="2">IN-PATIENT</th>
                <th>ICU</th>
            </tr>
            <tr>
                <th>Type</th>
                <th>Male</th>
                <th>Female</th>
                <th>Male</th>
                <th>Female</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>HGT/CBG</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hgtRadio1" name="hans_hgtRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_hgtRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hgtRadio2" name="hans_hgtRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_hgtRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hgtRadio3" name="hans_hgtRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_hgtRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hgtRadio4" name="hans_hgtRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_hgtRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_hgtCheckbox">
                        <label class="custom-control-label" for="hans_hgtCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>RBS</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_rbsRadio1" name="hans_rbsRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_rbsRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_rbsRadio2" name="hans_rbsRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_rbsRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_rbsRadio3" name="hans_rbsRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_rbsRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_rbsRadio4" name="hans_rbsRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_rbsRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_rbsCheckbox">
                        <label class="custom-control-label" for="hans_rbsCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>FBS</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_fbsRadio1" name="hans_fbsRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_fbsRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_fbsRadio2" name="hans_fbsRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_fbsRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_fbsRadio3" name="hans_fbsRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_fbsRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_fbsRadio4" name="hans_fbsRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_fbsRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_fbsCheckbox">
                        <label class="custom-control-label" for="hans_fbsCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>BUN</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_bunRadio1" name="hans_bunRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_bunRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_bunRadio2" name="hans_bunRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_bunRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_bunRadio3" name="hans_bunRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_bunRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_bunRadio4" name="hans_bunRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_bunRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_bunCheckbox">
                        <label class="custom-control-label" for="hans_bunCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>BUA</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_buaRadio1" name="hans_buaRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_buaRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_buaRadio2" name="hans_buaRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_buaRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_buaRadio3" name="hans_buaRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_buaRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_buaRadio4" name="hans_buaRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_buaRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_buaCheckbox">
                        <label class="custom-control-label" for="hans_buaCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>CHOLESTEROL</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_cholRadio1" name="hans_cholRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_cholRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_cholRadio2" name="hans_cholRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_cholRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_cholRadio3" name="hans_cholRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_cholRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_cholRadio4" name="hans_cholRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_cholRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_cholCheckbox">
                        <label class="custom-control-label" for="hans_cholCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>CREATININE</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_creaRadio1" name="hans_creaRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_creaRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_creaRadio2" name="hans_creaRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_creaRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_creaRadio3" name="hans_creaRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_creaRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_creaRadio4" name="hans_creaRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_creaRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_creaCheckbox">
                        <label class="custom-control-label" for="hans_creaCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>TOTAL PROTEIN</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_t_proRadio1" name="hans_t_proRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_t_proRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_t_proRadio2" name="hans_t_proRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_t_proRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_t_proRadio3" name="hans_t_proRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_t_proRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_t_proRadio4" name="hans_t_proRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_t_proRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_t_proCheckbox">
                        <label class="custom-control-label" for="hans_t_proCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>ALBUMIN</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_albRadio1" name="hans_albRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_albRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_albRadio2" name="hans_albRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_albRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_albRadio3" name="hans_albRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_albRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_albRadio4" name="hans_albRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_albRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_albCheckbox">
                        <label class="custom-control-label" for="hans_albCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>GLOBULIN</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_gloRadio1" name="hans_gloRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_gloRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_gloRadio2" name="hans_gloRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_gloRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_gloRadio3" name="hans_gloRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_gloRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_gloRadio4" name="hans_gloRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_gloRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_gloCheckbox">
                        <label class="custom-control-label" for="hans_gloCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>A/G RATIO</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_agrRadio1" name="hans_agrRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_agrRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_agrRadio2" name="hans_agrRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_agrRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_agrRadio3" name="hans_agrRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_agrRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_agrRadio4" name="hans_agrRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_agrRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_agrCheckbox">
                        <label class="custom-control-label" for="hans_agrCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>SGOT</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sgotRadio1" name="hans_sgotRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_sgotRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sgotRadio2" name="hans_sgotRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_sgotRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sgotRadio3" name="hans_sgotRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_sgotRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sgotRadio4" name="hans_sgotRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_sgotRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_sgotCheckbox">
                        <label class="custom-control-label" for="hans_sgotCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>SGPT</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sgptRadio1" name="hans_sgptRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_sgptRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sgptRadio2" name="hans_sgptRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_sgptRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sgptRadio3" name="hans_sgptRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_sgptRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sgptRadio4" name="hans_sgptRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_sgptRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_sgptCheckbox">
                        <label class="custom-control-label" for="hans_sgptCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>ALP</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_alpRadio1" name="hans_alpRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_alpRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_alpRadio2" name="hans_alpRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_alpRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_alpRadio3" name="hans_alpRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_alpRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_alpRadio4" name="hans_alpRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_alpRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_alpCheckbox">
                        <label class="custom-control-label" for="hans_alpCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>TRIGLY</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_triRadio1" name="hans_triRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_triRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_triRadio2" name="hans_triRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_triRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_triRadio3" name="hans_triRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_triRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_triRadio4" name="hans_triRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_triRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_triCheckbox">
                        <label class="custom-control-label" for="hans_triCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>HDL-CHOLE</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hdlcRadio1" name="hans_hdlcRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_hdlcRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hdlcRadio2" name="hans_hdlcRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_hdlcRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hdlcRadio3" name="hans_hdlcRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_hdlcRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hdlcRadio4" name="hans_hdlcRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_hdlcRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_hdlcCheckbox">
                        <label class="custom-control-label" for="hans_hdlcCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>LDL-CHOLE</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ldlcRadio1" name="hans_ldlcRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_ldlcRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ldlcRadio2" name="hans_ldlcRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_ldlcRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ldlcRadio3" name="hans_ldlcRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_ldlcRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ldlcRadio4" name="hans_ldlcRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_ldlcRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_ldlcCheckbox">
                        <label class="custom-control-label" for="hans_ldlcCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>VLDL</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_vldlRadio1" name="hans_vldlRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_vldlRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_vldlRadio2" name="hans_vldlRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_vldlRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_vldlRadio3" name="hans_vldlRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_vldlRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_vldlRadio4" name="hans_vldlRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_vldlRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_vldlCheckbox">
                        <label class="custom-control-label" for="hans_vldlCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>SODIUM</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sodRadio1" name="hans_sodRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_sodRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sodRadio2" name="hans_sodRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_sodRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sodRadio3" name="hans_sodRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_sodRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_sodRadio4" name="hans_sodRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_sodRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_sodCheckbox">
                        <label class="custom-control-label" for="hans_sodCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>POTASSIUM</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_potRadio1" name="hans_potRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_potRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_potRadio2" name="hans_potRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_potRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_potRadio3" name="hans_potRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_potRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_potRadio4" name="hans_potRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_potRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_potCheckbox">
                        <label class="custom-control-label" for="hans_potCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>CHLORIDE</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_chloRadio1" name="hans_chloRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_chloRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_chloRadio2" name="hans_chloRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_chloRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_chloRadio3" name="hans_chloRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_chloRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_chloRadio4" name="hans_chloRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_chloRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_chloCheckbox">
                        <label class="custom-control-label" for="hans_chloCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>HBAIC</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hbaRadio1" name="hans_hbaRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_hbaRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hbaRadio2" name="hans_hbaRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_hbaRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hbaRadio3" name="hans_hbaRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_hbaRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_hbaRadio4" name="hans_hbaRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_hbaRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_hbaCheckbox">
                        <label class="custom-control-label" for="hans_hbaCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>AMYLASE</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_amyRadio1" name="hans_amyRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_amyRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_amyRadio2" name="hans_amyRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_amyRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_amyRadio3" name="hans_amyRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_amyRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_amyRadio4" name="hans_amyRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_amyRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_amyCheckbox">
                        <label class="custom-control-label" for="hans_amyCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>ICA</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_icaRadio1" name="hans_icaRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_icaRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_icaRadio2" name="hans_icaRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_icaRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_icaRadio3" name="hans_icaRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_icaRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_icaRadio4" name="hans_icaRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_icaRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_icaCheckbox">
                        <label class="custom-control-label" for="hans_icaCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>OGTT</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ogttRadio1" name="hans_ogttRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_ogttRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ogttRadio2" name="hans_ogttRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_ogttRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ogttRadio3" name="hans_ogttRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_ogttRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ogttRadio4" name="hans_ogttRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_ogttRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_ogttCheckbox">
                        <label class="custom-control-label" for="hans_ogttCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>LDH</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ldhRadio1" name="hans_ldhRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_ldhRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ldhRadio2" name="hans_ldhRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_ldhRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ldhRadio3" name="hans_ldhRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_ldhRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_ldhRadio4" name="hans_ldhRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_ldhRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_ldhCheckbox">
                        <label class="custom-control-label" for="hans_ldhCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>MG</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_mgRadio1" name="hans_mgRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_mgRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_mgRadio2" name="hans_mgRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_mgRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_mgRadio3" name="hans_mgRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_mgRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_mgRadio4" name="hans_mgRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_mgRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_mgCheckbox">
                        <label class="custom-control-label" for="hans_mgCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>TOTAL BILIRUBIN</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_tbiliRadio1" name="hans_tbiliRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_tbiliRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_tbiliRadio2" name="hans_tbiliRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_tbiliRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_tbiliRadio3" name="hans_tbiliRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_tbiliRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_tbiliRadio4" name="hans_tbiliRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_tbiliRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_tbiliCheckbox">
                        <label class="custom-control-label" for="hans_tbiliCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>DIRECT-BILI</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_dbiliRadio1" name="hans_dbiliRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_dbiliRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_dbiliRadio2" name="hans_dbiliRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_dbiliRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_dbiliRadio3" name="hans_dbiliRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_dbiliRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_dbiliRadio4" name="hans_dbiliRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_dbiliRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_dbiliCheckbox">
                        <label class="custom-control-label" for="hans_dbiliCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>INDIRECT-BILI</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_indbiliRadio1" name="hans_indbiliRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_indbiliRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_indbiliRadio2" name="hans_indbiliRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_indbiliRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_indbiliRadio3" name="hans_indbiliRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_indbiliRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_indbiliRadio4" name="hans_indbiliRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_indbiliRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_indbiliCheckbox">
                        <label class="custom-control-label" for="hans_indbiliCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>PHOSPHOROUS</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_phosRadio1" name="hans_phosRadio" class="custom-control-input" value="hans_opd_male">
                        <label class="custom-control-label" for="hans_phosRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_phosRadio2" name="hans_phosRadio" class="custom-control-input" value="hans_opd_female">
                        <label class="custom-control-label" for="hans_phosRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_phosRadio3" name="hans_phosRadio" class="custom-control-input" value="hans_ip_male">
                        <label class="custom-control-label" for="hans_phosRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="hans_phosRadio4" name="hans_phosRadio" class="custom-control-input" value="hans_ip_female">
                        <label class="custom-control-label" for="hans_phosRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="hans_phosCheckbox">
                        <label class="custom-control-label" for="hans_phosCheckbox"></label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Insert Data" class="btn btn-success btn-block text-white mt-4" name="btn_hans">
</form>