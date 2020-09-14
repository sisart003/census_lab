<form action="add-non-hansen.php" method="post">
<table id="non-hansen" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th><input type="hidden" name="non_hansen" value="non_hansen"></th>
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
                        <input type="radio" id="nh_hgtRadio1" name="nh_hgtRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_hgtRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hgtRadio2" name="nh_hgtRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_hgtRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hgtRadio3" name="nh_hgtRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_hgtRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hgtRadio4" name="nh_hgtRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_hgtRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_hgtCheckbox">
                        <label class="custom-control-label" for="nh_hgtCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>RBS</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_rbsRadio1" name="nh_rbsRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_rbsRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_rbsRadio2" name="nh_rbsRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_rbsRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_rbsRadio3" name="nh_rbsRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_rbsRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_rbsRadio4" name="nh_rbsRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_rbsRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_rbsCheckbox">
                        <label class="custom-control-label" for="nh_rbsCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>FBS</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_fbsRadio1" name="nh_fbsRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_fbsRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_fbsRadio2" name="nh_fbsRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_fbsRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_fbsRadio3" name="nh_fbsRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_fbsRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_fbsRadio4" name="nh_fbsRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_fbsRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_fbsCheckbox">
                        <label class="custom-control-label" for="nh_fbsCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>BUN</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_bunRadio1" name="nh_bunRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_bunRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_bunRadio2" name="nh_bunRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_bunRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_bunRadio3" name="nh_bunRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_bunRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_bunRadio4" name="nh_bunRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_bunRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_bunCheckbox">
                        <label class="custom-control-label" for="nh_bunCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>BUA</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_buaRadio1" name="nh_buaRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_buaRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_buaRadio2" name="nh_buaRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_buaRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_buaRadio3" name="nh_buaRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_buaRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_buaRadio4" name="nh_buaRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_buaRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_buaCheckbox">
                        <label class="custom-control-label" for="nh_buaCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>CHOLESTEROL</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_cholRadio1" name="nh_cholRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_cholRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_cholRadio2" name="nh_cholRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_cholRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_cholRadio3" name="nh_cholRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_cholRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_cholRadio4" name="nh_cholRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_cholRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_cholCheckbox">
                        <label class="custom-control-label" for="nh_cholCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>CREATININE</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_creaRadio1" name="nh_creaRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_creaRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_creaRadio2" name="nh_creaRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_creaRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_creaRadio3" name="nh_creaRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_creaRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_creaRadio4" name="nh_creaRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_creaRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_creaCheckbox">
                        <label class="custom-control-label" for="nh_creaCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>TOTAL PROTEIN</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_t_proRadio1" name="nh_t_proRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_t_proRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_t_proRadio2" name="nh_t_proRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_t_proRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_t_proRadio3" name="nh_t_proRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_t_proRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_t_proRadio4" name="nh_t_proRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_t_proRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_t_proCheckbox">
                        <label class="custom-control-label" for="nh_t_proCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>ALBUMIN</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_albRadio1" name="nh_albRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_albRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_albRadio2" name="nh_albRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_albRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_albRadio3" name="nh_albRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_albRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_albRadio4" name="nh_albRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_albRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_albCheckbox">
                        <label class="custom-control-label" for="nh_albCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>GLOBULIN</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_gloRadio1" name="nh_gloRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_gloRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_gloRadio2" name="nh_gloRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_gloRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_gloRadio3" name="nh_gloRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_gloRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_gloRadio4" name="nh_gloRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_gloRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_gloCheckbox">
                        <label class="custom-control-label" for="nh_gloCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>A/G RATIO</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_agrRadio1" name="nh_agrRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_agrRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_agrRadio2" name="nh_agrRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_agrRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_agrRadio3" name="nh_agrRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_agrRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_agrRadio4" name="nh_agrRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_agrRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_agrCheckbox">
                        <label class="custom-control-label" for="nh_agrCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>SGOT</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sgotRadio1" name="nh_sgotRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_sgotRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sgotRadio2" name="nh_sgotRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_sgotRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sgotRadio3" name="nh_sgotRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_sgotRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sgotRadio4" name="nh_sgotRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_sgotRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_sgotCheckbox">
                        <label class="custom-control-label" for="nh_sgotCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>SGPT</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sgptRadio1" name="nh_sgptRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_sgptRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sgptRadio2" name="nh_sgptRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_sgptRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sgptRadio3" name="nh_sgptRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_sgptRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sgptRadio4" name="nh_sgptRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_sgptRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_sgptCheckbox">
                        <label class="custom-control-label" for="nh_sgptCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>ALP</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_alpRadio1" name="nh_alpRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_alpRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_alpRadio2" name="nh_alpRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_alpRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_alpRadio3" name="nh_alpRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_alpRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_alpRadio4" name="nh_alpRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_alpRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_alpCheckbox">
                        <label class="custom-control-label" for="nh_alpCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>TRIGLY</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_triRadio1" name="nh_triRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_triRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_triRadio2" name="nh_triRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_triRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_triRadio3" name="nh_triRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_triRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_triRadio4" name="nh_triRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_triRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_triCheckbox">
                        <label class="custom-control-label" for="nh_triCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>HDL-CHOLE</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hdlcRadio1" name="nh_hdlcRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_hdlcRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hdlcRadio2" name="nh_hdlcRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_hdlcRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hdlcRadio3" name="nh_hdlcRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_hdlcRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hdlcRadio4" name="nh_hdlcRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_hdlcRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_hdlcCheckbox">
                        <label class="custom-control-label" for="nh_hdlcCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>LDL-CHOLE</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ldlcRadio1" name="nh_ldlcRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_ldlcRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ldlcRadio2" name="nh_ldlcRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_ldlcRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ldlcRadio3" name="nh_ldlcRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_ldlcRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ldlcRadio4" name="nh_ldlcRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_ldlcRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_ldlcCheckbox">
                        <label class="custom-control-label" for="nh_ldlcCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>VLDL</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_vldlRadio1" name="nh_vldlRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_vldlRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_vldlRadio2" name="nh_vldlRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_vldlRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_vldlRadio3" name="nh_vldlRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_vldlRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_vldlRadio4" name="nh_vldlRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_vldlRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_vldlCheckbox">
                        <label class="custom-control-label" for="nh_vldlCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>SODIUM</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sodRadio1" name="nh_sodRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_sodRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sodRadio2" name="nh_sodRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_sodRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sodRadio3" name="nh_sodRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_sodRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_sodRadio4" name="nh_sodRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_sodRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_sodCheckbox">
                        <label class="custom-control-label" for="nh_sodCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>POTASSIUM</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_potRadio1" name="nh_potRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_potRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_potRadio2" name="nh_potRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_potRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_potRadio3" name="nh_potRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_potRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_potRadio4" name="nh_potRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_potRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_potCheckbox">
                        <label class="custom-control-label" for="nh_potCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>CHLORIDE</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_chloRadio1" name="nh_chloRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_chloRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_chloRadio2" name="nh_chloRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_chloRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_chloRadio3" name="nh_chloRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_chloRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_chloRadio4" name="nh_chloRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_chloRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_chloCheckbox">
                        <label class="custom-control-label" for="nh_chloCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>HBAIC</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hbaRadio1" name="nh_hbaRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_hbaRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hbaRadio2" name="nh_hbaRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_hbaRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hbaRadio3" name="nh_hbaRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_hbaRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_hbaRadio4" name="nh_hbaRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_hbaRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_hbaCheckbox">
                        <label class="custom-control-label" for="nh_hbaCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>AMYLASE</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_amyRadio1" name="nh_amyRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_amyRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_amyRadio2" name="nh_amyRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_amyRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_amyRadio3" name="nh_amyRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_amyRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_amyRadio4" name="nh_amyRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_amyRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_amyCheckbox">
                        <label class="custom-control-label" for="nh_amyCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>ICA</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_icaRadio1" name="nh_icaRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_icaRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_icaRadio2" name="nh_icaRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_icaRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_icaRadio3" name="nh_icaRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_icaRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_icaRadio4" name="nh_icaRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_icaRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_icaCheckbox">
                        <label class="custom-control-label" for="nh_icaCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>OGTT</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ogttRadio1" name="nh_ogttRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_ogttRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ogttRadio2" name="nh_ogttRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_ogttRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ogttRadio3" name="nh_ogttRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_ogttRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ogttRadio4" name="nh_ogttRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_ogttRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_ogttCheckbox">
                        <label class="custom-control-label" for="nh_ogttCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>LDH</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ldhRadio1" name="nh_ldhRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_ldhRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ldhRadio2" name="nh_ldhRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_ldhRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ldhRadio3" name="nh_ldhRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_ldhRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_ldhRadio4" name="nh_ldhRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_ldhRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_ldhCheckbox">
                        <label class="custom-control-label" for="nh_ldhCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>MG</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_mgRadio1" name="nh_mgRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_mgRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_mgRadio2" name="nh_mgRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_mgRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_mgRadio3" name="nh_mgRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_mgRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_mgRadio4" name="nh_mgRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_mgRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_mgCheckbox">
                        <label class="custom-control-label" for="nh_mgCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>TOTAL BILIRUBIN</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_tbiliRadio1" name="nh_tbiliRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_tbiliRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_tbiliRadio2" name="nh_tbiliRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_tbiliRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_tbiliRadio3" name="nh_tbiliRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_tbiliRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_tbiliRadio4" name="nh_tbiliRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_tbiliRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_tbiliCheckbox">
                        <label class="custom-control-label" for="nh_tbiliCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>DIRECT-BILI</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_dbiliRadio1" name="nh_dbiliRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_dbiliRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_dbiliRadio2" name="nh_dbiliRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_dbiliRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_dbiliRadio3" name="nh_dbiliRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_dbiliRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_dbiliRadio4" name="nh_dbiliRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_dbiliRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_dbiliCheckbox">
                        <label class="custom-control-label" for="nh_dbiliCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>INDIRECT-BILI</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_indbiliRadio1" name="nh_indbiliRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_indbiliRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_indbiliRadio2" name="nh_indbiliRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_indbiliRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_indbiliRadio3" name="nh_indbiliRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_indbiliRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_indbiliRadio4" name="nh_indbiliRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_indbiliRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_indbiliCheckbox">
                        <label class="custom-control-label" for="nh_indbiliCheckbox"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>PHOSPHOROUS</td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_phosRadio1" name="nh_phosRadio" class="custom-control-input" value="nh_opd_male">
                        <label class="custom-control-label" for="nh_phosRadio1"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_phosRadio2" name="nh_phosRadio" class="custom-control-input" value="nh_opd_female">
                        <label class="custom-control-label" for="nh_phosRadio2"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_phosRadio3" name="nh_phosRadio" class="custom-control-input" value="nh_ip_male">
                        <label class="custom-control-label" for="nh_phosRadio3"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="nh_phosRadio4" name="nh_phosRadio" class="custom-control-input" value="nh_ip_female">
                        <label class="custom-control-label" for="nh_phosRadio4"></label>
                    </div>
                </td>
                <td>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="nh_phosCheckbox">
                        <label class="custom-control-label" for="nh_phosCheckbox"></label>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>
    <input type="submit" value="Insert Data" class="btn btn-success text-white btn-block mt-4" name="btn_nonhans">
    </form>