<?php require 'config/process.php'; ?>
    <table id="non-hansen" class="table table-striped table-bordered">
        <thead>
            <tr>
                <th><input type="hidden" name="non-hansen" value="non-hansen"></th>
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
                <td><?= $hgt_nhom_tally?></td>
                <td><?= $hgt_nhof_tally?></td>
                <td><?= $hgt_nhipm_tally?></td>
                <td><?= $hgt_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>RBS</td>
                <td><?= $rbs_nhom_tally?></td>
                <td><?= $rbs_nhof_tally?></td>
                <td><?= $rbs_nhipm_tally?></td>
                <td><?= $rbs_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>FBS</td>
                <td><?= $fbs_nhom_tally?></td>
                <td><?= $fbs_nhof_tally?></td>
                <td><?= $fbs_nhipm_tally?></td>
                <td><?= $fbs_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>BUN</td>
                <td><?= $bun_nhom_tally?></td>
                <td><?= $bun_nhof_tally?></td>
                <td><?= $bun_nhipm_tally?></td>
                <td><?= $bun_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>BUA</td>
                <td><?= $bua_nhom_tally?></td>
                <td><?= $bua_nhof_tally?></td>
                <td><?= $bua_nhipm_tally?></td>
                <td><?= $bua_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>CHOLESTEROL</td>
                <td><?= $chol_nhom_tally?></td>
                <td><?= $chol_nhof_tally?></td>
                <td><?= $chol_nhipm_tally?></td>
                <td><?= $chol_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>CREATININE</td>
                <td><?= $crea_nhom_tally?></td>
                <td><?= $crea_nhof_tally?></td>
                <td><?= $crea_nhipm_tally?></td>
                <td><?= $crea_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>TOTAL PROTEIN</td>
                <td><?= $t_pro_nhom_tally?></td>
                <td><?= $t_pro_nhof_tally?></td>
                <td><?= $t_pro_nhipm_tally?></td>
                <td><?= $t_pro_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>ALBUMIN</td>
                <td><?= $alb_nhom_tally?></td>
                <td><?= $alb_nhof_tally?></td>
                <td><?= $alb_nhipm_tally?></td>
                <td><?= $alb_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>GLOBULIN</td>
                <td><?= $glo_nhom_tally?></td>
                <td><?= $glo_nhof_tally?></td>
                <td><?= $glo_nhipm_tally?></td>
                <td><?= $glo_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>A/G RATIO</td>
                <td><?= $agr_nhom_tally?></td>
                <td><?= $agr_nhof_tally?></td>
                <td><?= $agr_nhipm_tally?></td>
                <td><?= $agr_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>SGOT</td>
                <td><?= $sgot_nhom_tally?></td>
                <td><?= $sgot_nhof_tally?></td>
                <td><?= $sgot_nhipm_tally?></td>
                <td><?= $sgot_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>SGPT</td>
                <td><?= $sgpt_nhom_tally?></td>
                <td><?= $sgpt_nhof_tally?></td>
                <td><?= $sgpt_nhipm_tally?></td>
                <td><?= $sgpt_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>ALP</td>
                <td><?= $alp_nhom_tally?></td>
                <td><?= $alp_nhof_tally?></td>
                <td><?= $alp_nhipm_tally?></td>
                <td><?= $alp_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>TRIGLY</td>
                <td><?= $trigly_nhom_tally?></td>
                <td><?= $trigly_nhof_tally?></td>
                <td><?= $trigly_nhipm_tally?></td>
                <td><?= $trigly_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>HDL-CHOLE</td>
                <td><?= $hdlc_nhom_tally?></td>
                <td><?= $hdlc_nhof_tally?></td>
                <td><?= $hdlc_nhipm_tally?></td>
                <td><?= $hdlc_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>LDL-CHOLE</td>
                <td><?= $ldlc_nhom_tally?></td>
                <td><?= $ldlc_nhof_tally?></td>
                <td><?= $ldlc_nhipm_tally?></td>
                <td><?= $ldlc_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>VLDL</td>
                <td><?= $vldl_nhom_tally?></td>
                <td><?= $vldl_nhof_tally?></td>
                <td><?= $vldl_nhipm_tally?></td>
                <td><?= $vldl_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>SODIUM</td>
                <td><?= $sodium_nhom_tally?></td>
                <td><?= $sodium_nhof_tally?></td>
                <td><?= $sodium_nhipm_tally?></td>
                <td><?= $sodium_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>POTASSIUM</td>
                <td><?= $pot_nhom_tally?></td>
                <td><?= $pot_nhof_tally?></td>
                <td><?= $pot_nhipm_tally?></td>
                <td><?= $pot_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>CHLORIDE</td>
                <td><?= $chloride_nhom_tally?></td>
                <td><?= $chloride_nhof_tally?></td>
                <td><?= $chloride_nhipm_tally?></td>
                <td><?= $chloride_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>HBAIC</td>
                <td><?= $dba_c_nhom_tally?></td>
                <td><?= $dba_c_nhof_tally?></td>
                <td><?= $dba_c_nhipm_tally?></td>
                <td><?= $dba_c_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>AMYLASE</td>
                <td><?= $amylase_nhom_tally?></td>
                <td><?= $amylase_nhof_tally?></td>
                <td><?= $amylase_nhipm_tally?></td>
                <td><?= $amylase_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>ICA</td>
                <td><?= $i_ca_nhom_tally?></td>
                <td><?= $i_ca_nhof_tally?></td>
                <td><?= $i_ca_nhipm_tally?></td>
                <td><?= $i_ca_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>OGTT</td>
                <td><?= $ogtt_nhom_tally?></td>
                <td><?= $ogtt_nhof_tally?></td>
                <td><?= $ogtt_nhipm_tally?></td>
                <td><?= $ogtt_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>LDH</td>
                <td><?= $ldh_nhom_tally?></td>
                <td><?= $ldh_nhof_tally?></td>
                <td><?= $ldh_nhipm_tally?></td>
                <td><?= $ldh_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>MG</td>
                <td><?= $mg_nhom_tally?></td>
                <td><?= $mg_nhof_tally?></td>
                <td><?= $mg_nhipm_tally?></td>
                <td><?= $mg_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>TOTAL BILIRUBIN</td>
                <td><?= $tbili_nhom_tally?></td>
                <td><?= $tbili_nhof_tally?></td>
                <td><?= $tbili_nhipm_tally?></td>
                <td><?= $tbili_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>DIRECT-BILI</td>
                <td><?= $dbili_nhom_tally?></td>
                <td><?= $dbili_nhof_tally?></td>
                <td><?= $dbili_nhipm_tally?></td>
                <td><?= $dbili_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>INDIRECT-BILI</td>
                <td><?= $indbili_nhom_tally?></td>
                <td><?= $indbili_nhof_tally?></td>
                <td><?= $indbili_nhipm_tally?></td>
                <td><?= $indbili_nhipf_tally?></td>
                <td>100</td>
            </tr>
            <tr>
                <td>PHOSPHOROUS</td>
                <td><?= $phos_nhom_tally?></td>
                <td><?= $phos_nhof_tally?></td>
                <td><?= $phos_nhipm_tally?></td>
                <td><?= $phos_nhipf_tally?></td>
                <td>100</td>
            </tr>
        </tbody>
    </table>