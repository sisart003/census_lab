<?php
require 'database.php';

$query = "SELECT 
                  -- HGT
                  SUM(hgt = 'hans_opd_male') AS hgt_hansom_tally,
                  SUM(hgt = 'hans_opd_female') AS hgt_hansof_tally,
                  SUM(hgt = 'hans_ip_male') AS hgt_hansipm_tally,
                  SUM(hgt = 'hans_ip_female') AS hgt_hansipf_tally,

                  SUM(hgt = 'nh_opd_male') AS hgt_nhom_tally,
                  SUM(hgt = 'nh_opd_female') AS hgt_nhof_tally,
                  SUM(hgt = 'nh_ip_male') AS hgt_nhipm_tally,
                  SUM(hgt = 'nh_ip_female') AS hgt_nhipf_tally,

                  -- RBS
                  SUM(rbs = 'hans_opd_male') AS rbs_hansom_tally,
                  SUM(rbs = 'hans_opd_female') AS rbs_hansof_tally,
                  SUM(rbs = 'hans_ip_male') AS rbs_hansipm_tally,
                  SUM(rbs = 'hans_ip_female') AS rbs_hansipf_tally,

                  SUM(rbs = 'nh_opd_male') AS rbs_nhom_tally,
                  SUM(rbs = 'nh_opd_female') AS rbs_nhof_tally,
                  SUM(rbs = 'nh_ip_male') AS rbs_nhipm_tally,
                  SUM(rbs = 'nh_ip_female') AS rbs_nhipf_tally,

                  -- FBS
                  SUM(fbs = 'hans_opd_male') AS fbs_hansom_tally,
                  SUM(fbs = 'hans_opd_female') AS fbs_hansof_tally,
                  SUM(fbs = 'hans_ip_male') AS fbs_hansipm_tally,
                  SUM(fbs = 'hans_ip_female') AS fbs_hansipf_tally,

                  SUM(fbs = 'nh_opd_male') AS fbs_nhom_tally,
                  SUM(fbs = 'nh_opd_female') AS fbs_nhof_tally,
                  SUM(fbs = 'nh_ip_male') AS fbs_nhipm_tally,
                  SUM(fbs = 'nh_ip_female') AS fbs_nhipf_tally,

                  -- BUN
                  SUM(bun = 'hans_opd_male') AS bun_hansom_tally,
                  SUM(bun = 'hans_opd_female') AS bun_hansof_tally,
                  SUM(bun = 'hans_ip_male') AS bun_hansipm_tally,
                  SUM(bun = 'hans_ip_female') AS bun_hansipf_tally,

                  SUM(bun = 'nh_opd_male') AS bun_nhom_tally,
                  SUM(bun = 'nh_opd_female') AS bun_nhof_tally,
                  SUM(bun = 'nh_ip_male') AS bun_nhipm_tally,
                  SUM(bun = 'nh_ip_female') AS bun_nhipf_tally,

                  -- BUA
                  SUM(bua = 'hans_opd_male') AS bua_hansom_tally,
                  SUM(bua = 'hans_opd_female') AS bua_hansof_tally,
                  SUM(bua = 'hans_ip_male') AS bua_hansipm_tally,
                  SUM(bua = 'hans_ip_female') AS bua_hansipf_tally,

                  SUM(bua = 'nh_opd_male') AS bua_nhom_tally,
                  SUM(bua = 'nh_opd_female') AS bua_nhof_tally,
                  SUM(bua = 'nh_ip_male') AS bua_nhipm_tally,
                  SUM(bua = 'nh_ip_female') AS bua_nhipf_tally,

                  -- CHOLESTEROL
                  SUM(cholesterol = 'hans_opd_male') AS chol_hansom_tally,
                  SUM(cholesterol = 'hans_opd_female') AS chol_hansof_tally,
                  SUM(cholesterol = 'hans_ip_male') AS chol_hansipm_tally,
                  SUM(cholesterol = 'hans_ip_female') AS chol_hansipf_tally,

                  SUM(cholesterol = 'nh_opd_male') AS chol_nhom_tally,
                  SUM(cholesterol = 'nh_opd_female') AS chol_nhof_tally,
                  SUM(cholesterol = 'nh_ip_male') AS chol_nhipm_tally,
                  SUM(cholesterol = 'nh_ip_female') AS chol_nhipf_tally,

                  -- CREATININE
                  SUM(creatinine = 'hans_opd_male') AS crea_hansom_tally,
                  SUM(creatinine = 'hans_opd_female') AS crea_hansof_tally,
                  SUM(creatinine = 'hans_ip_male') AS crea_hansipm_tally,
                  SUM(creatinine = 'hans_ip_female') AS crea_hansipf_tally,

                  SUM(creatinine = 'nh_opd_male') AS crea_nhom_tally,
                  SUM(creatinine = 'nh_opd_female') AS crea_nhof_tally,
                  SUM(creatinine = 'nh_ip_male') AS crea_nhipm_tally,
                  SUM(creatinine = 'nh_ip_female') AS crea_nhipf_tally,

                  -- TOTAL PROTEIN
                  SUM(total_protein = 'hans_opd_male') AS t_pro_hansom_tally,
                  SUM(total_protein = 'hans_opd_female') AS t_pro_hansof_tally,
                  SUM(total_protein = 'hans_ip_male') AS t_pro_hansipm_tally,
                  SUM(total_protein = 'hans_ip_female') AS t_pro_hansipf_tally,

                  SUM(total_protein = 'nh_opd_male') AS t_pro_nhom_tally,
                  SUM(total_protein = 'nh_opd_female') AS t_pro_nhof_tally,
                  SUM(total_protein = 'nh_ip_male') AS t_pro_nhipm_tally,
                  SUM(total_protein = 'nh_ip_female') AS t_pro_nhipf_tally,

                  -- ALBUMIN
                  SUM(albumin = 'hans_opd_male') AS alb_hansom_tally,
                  SUM(albumin = 'hans_opd_female') AS alb_hansof_tally,
                  SUM(albumin = 'hans_ip_male') AS alb_hansipm_tally,
                  SUM(albumin = 'hans_ip_female') AS alb_hansipf_tally,

                  SUM(albumin = 'nh_opd_male') AS alb_nhom_tally,
                  SUM(albumin = 'nh_opd_female') AS alb_nhof_tally,
                  SUM(albumin = 'nh_ip_male') AS alb_nhipm_tally,
                  SUM(albumin = 'nh_ip_female') AS alb_nhipf_tally,

                  -- GLOBULIN
                  SUM(globulin = 'hans_opd_male') AS glo_hansom_tally,
                  SUM(globulin = 'hans_opd_female') AS glo_hansof_tally,
                  SUM(globulin = 'hans_ip_male') AS glo_hansipm_tally,
                  SUM(globulin = 'hans_ip_female') AS glo_hansipf_tally,

                  SUM(globulin = 'nh_opd_male') AS glo_nhom_tally,
                  SUM(globulin = 'nh_opd_female') AS glo_nhof_tally,
                  SUM(globulin = 'nh_ip_male') AS glo_nhipm_tally,
                  SUM(globulin = 'nh_ip_female') AS glo_nhipf_tally,

                  -- A/G RATIO
                  SUM(ag_ratio = 'hans_opd_male') AS agr_hansom_tally,
                  SUM(ag_ratio = 'hans_opd_female') AS agr_hansof_tally,
                  SUM(ag_ratio = 'hans_ip_male') AS agr_hansipm_tally,
                  SUM(ag_ratio = 'hans_ip_female') AS agr_hansipf_tally,

                  SUM(ag_ratio = 'nh_opd_male') AS agr_nhom_tally,
                  SUM(ag_ratio = 'nh_opd_female') AS agr_nhof_tally,
                  SUM(ag_ratio = 'nh_ip_male') AS agr_nhipm_tally,
                  SUM(ag_ratio = 'nh_ip_female') AS agr_nhipf_tally,

                  -- SGOT
                  SUM(sgot = 'hans_opd_male') AS sgot_hansom_tally,
                  SUM(sgot = 'hans_opd_female') AS sgot_hansof_tally,
                  SUM(sgot = 'hans_ip_male') AS sgot_hansipm_tally,
                  SUM(sgot = 'hans_ip_female') AS sgot_hansipf_tally,

                  SUM(sgot = 'nh_opd_male') AS sgot_nhom_tally,
                  SUM(sgot = 'nh_opd_female') AS sgot_nhof_tally,
                  SUM(sgot = 'nh_ip_male') AS sgot_nhipm_tally,
                  SUM(sgot = 'nh_ip_female') AS sgot_nhipf_tally,

                  -- SGPT
                  SUM(sgpt = 'hans_opd_male') AS sgpt_hansom_tally,
                  SUM(sgpt = 'hans_opd_female') AS sgpt_hansof_tally,
                  SUM(sgpt = 'hans_ip_male') AS sgpt_hansipm_tally,
                  SUM(sgpt = 'hans_ip_female') AS sgpt_hansipf_tally,

                  SUM(sgpt = 'nh_opd_male') AS sgpt_nhom_tally,
                  SUM(sgpt = 'nh_opd_female') AS sgpt_nhof_tally,
                  SUM(sgpt = 'nh_ip_male') AS sgpt_nhipm_tally,
                  SUM(sgpt = 'nh_ip_female') AS sgpt_nhipf_tally,

                  -- ALP
                  SUM(alp = 'hans_opd_male') AS alp_hansom_tally,
                  SUM(alp = 'hans_opd_female') AS alp_hansof_tally,
                  SUM(alp = 'hans_ip_male') AS alp_hansipm_tally,
                  SUM(alp = 'hans_ip_female') AS alp_hansipf_tally,

                  SUM(alp = 'nh_opd_male') AS alp_nhom_tally,
                  SUM(alp = 'nh_opd_female') AS alp_nhof_tally,
                  SUM(alp = 'nh_ip_male') AS alp_nhipm_tally,
                  SUM(alp = 'nh_ip_female') AS alp_nhipf_tally,

                  -- TRIGLY
                  SUM(trigly = 'hans_opd_male') AS trigly_hansom_tally,
                  SUM(trigly = 'hans_opd_female') AS trigly_hansof_tally,
                  SUM(trigly = 'hans_ip_male') AS trigly_hansipm_tally,
                  SUM(trigly = 'hans_ip_female') AS trigly_hansipf_tally,

                  SUM(trigly = 'nh_opd_male') AS trigly_nhom_tally,
                  SUM(trigly = 'nh_opd_female') AS trigly_nhof_tally,
                  SUM(trigly = 'nh_ip_male') AS trigly_nhipm_tally,
                  SUM(trigly = 'nh_ip_female') AS trigly_nhipf_tally,

                  -- HDL-CHOLE
                  SUM(hdl_chole = 'hans_opd_male') AS hdlc_hansom_tally,
                  SUM(hdl_chole = 'hans_opd_female') AS hdlc_hansof_tally,
                  SUM(hdl_chole = 'hans_ip_male') AS hdlc_hansipm_tally,
                  SUM(hdl_chole = 'hans_ip_female') AS hdlc_hansipf_tally,

                  SUM(hdl_chole = 'nh_opd_male') AS hdlc_nhom_tally,
                  SUM(hdl_chole = 'nh_opd_female') AS hdlc_nhof_tally,
                  SUM(hdl_chole = 'nh_ip_male') AS hdlc_nhipm_tally,
                  SUM(hdl_chole = 'nh_ip_female') AS hdlc_nhipf_tally,

                  -- LDL-CHOLE
                  SUM(ldl_chole = 'hans_opd_male') AS ldlc_hansom_tally,
                  SUM(ldl_chole = 'hans_opd_female') AS ldlc_hansof_tally,
                  SUM(ldl_chole = 'hans_ip_male') AS ldlc_hansipm_tally,
                  SUM(ldl_chole = 'hans_ip_female') AS ldlc_hansipf_tally,

                  SUM(ldl_chole = 'nh_opd_male') AS ldlc_nhom_tally,
                  SUM(ldl_chole = 'nh_opd_female') AS ldlc_nhof_tally,
                  SUM(ldl_chole = 'nh_ip_male') AS ldlc_nhipm_tally,
                  SUM(ldl_chole = 'nh_ip_female') AS ldlc_nhipf_tally,

                  -- VLDL
                  SUM(vldl = 'hans_opd_male') AS vldl_hansom_tally,
                  SUM(vldl = 'hans_opd_female') AS vldl_hansof_tally,
                  SUM(vldl = 'hans_ip_male') AS vldl_hansipm_tally,
                  SUM(vldl = 'hans_ip_female') AS vldl_hansipf_tally,

                  SUM(vldl = 'nh_opd_male') AS vldl_nhom_tally,
                  SUM(vldl = 'nh_opd_female') AS vldl_nhof_tally,
                  SUM(vldl = 'nh_ip_male') AS vldl_nhipm_tally,
                  SUM(vldl = 'nh_ip_female') AS vldl_nhipf_tally,

                  -- SODIUM
                  SUM(sodium = 'hans_opd_male') AS sodium_hansom_tally,
                  SUM(sodium = 'hans_opd_female') AS sodium_hansof_tally,
                  SUM(sodium = 'hans_ip_male') AS sodium_hansipm_tally,
                  SUM(sodium = 'hans_ip_female') AS sodium_hansipf_tally,

                  SUM(sodium = 'nh_opd_male') AS sodium_nhom_tally,
                  SUM(sodium = 'nh_opd_female') AS sodium_nhof_tally,
                  SUM(sodium = 'nh_ip_male') AS sodium_nhipm_tally,
                  SUM(sodium = 'nh_ip_female') AS sodium_nhipf_tally,

                  -- POTASSIUM
                  SUM(potassium = 'hans_opd_male') AS pot_hansom_tally,
                  SUM(potassium = 'hans_opd_female') AS pot_hansof_tally,
                  SUM(potassium = 'hans_ip_male') AS pot_hansipm_tally,
                  SUM(potassium = 'hans_ip_female') AS pot_hansipf_tally,

                  SUM(potassium = 'nh_opd_male') AS pot_nhom_tally,
                  SUM(potassium = 'nh_opd_female') AS pot_nhof_tally,
                  SUM(potassium = 'nh_ip_male') AS pot_nhipm_tally,
                  SUM(potassium = 'nh_ip_female') AS pot_nhipf_tally,

                  -- CHLORIDE
                  SUM(chloride = 'hans_opd_male') AS chloride_hansom_tally,
                  SUM(chloride = 'hans_opd_female') AS chloride_hansof_tally,
                  SUM(chloride = 'hans_ip_male') AS chloride_hansipm_tally,
                  SUM(chloride = 'hans_ip_female') AS chloride_hansipf_tally,

                  SUM(chloride = 'nh_opd_male') AS chloride_nhom_tally,
                  SUM(chloride = 'nh_opd_female') AS chloride_nhof_tally,
                  SUM(chloride = 'nh_ip_male') AS chloride_nhipm_tally,
                  SUM(chloride = 'nh_ip_female') AS chloride_nhipf_tally,

                  -- HBA1c
                  SUM(dba_c = 'hans_opd_male') AS dba_c_hansom_tally,
                  SUM(dba_c = 'hans_opd_female') AS dba_c_hansof_tally,
                  SUM(dba_c = 'hans_ip_male') AS dba_c_hansipm_tally,
                  SUM(dba_c = 'hans_ip_female') AS dba_c_hansipf_tally,

                  SUM(dba_c = 'nh_opd_male') AS dba_c_nhom_tally,
                  SUM(dba_c = 'nh_opd_female') AS dba_c_nhof_tally,
                  SUM(dba_c = 'nh_ip_male') AS dba_c_nhipm_tally,
                  SUM(dba_c = 'nh_ip_female') AS dba_c_nhipf_tally,

                  -- AMYLASE
                  SUM(amylase = 'hans_opd_male') AS amylase_hansom_tally,
                  SUM(amylase = 'hans_opd_female') AS amylase_hansof_tally,
                  SUM(amylase = 'hans_ip_male') AS amylase_hansipm_tally,
                  SUM(amylase = 'hans_ip_female') AS amylase_hansipf_tally,

                  SUM(amylase = 'nh_opd_male') AS amylase_nhom_tally,
                  SUM(amylase = 'nh_opd_female') AS amylase_nhof_tally,
                  SUM(amylase = 'nh_ip_male') AS amylase_nhipm_tally,
                  SUM(amylase = 'nh_ip_female') AS amylase_nhipf_tally,

                  -- I Ca
                  SUM(i_ca = 'hans_opd_male') AS i_ca_hansom_tally,
                  SUM(i_ca = 'hans_opd_female') AS i_ca_hansof_tally,
                  SUM(i_ca = 'hans_ip_male') AS i_ca_hansipm_tally,
                  SUM(i_ca = 'hans_ip_female') AS i_ca_hansipf_tally,

                  SUM(i_ca = 'nh_opd_male') AS i_ca_nhom_tally,
                  SUM(i_ca = 'nh_opd_female') AS i_ca_nhof_tally,
                  SUM(i_ca = 'nh_ip_male') AS i_ca_nhipm_tally,
                  SUM(i_ca = 'nh_ip_female') AS i_ca_nhipf_tally,

                  -- OGTT
                  SUM(ogtt = 'hans_opd_male') AS ogtt_hansom_tally,
                  SUM(ogtt = 'hans_opd_female') AS ogtt_hansof_tally,
                  SUM(ogtt = 'hans_ip_male') AS ogtt_hansipm_tally,
                  SUM(ogtt = 'hans_ip_female') AS ogtt_hansipf_tally,

                  SUM(ogtt = 'nh_opd_male') AS ogtt_nhom_tally,
                  SUM(ogtt = 'nh_opd_female') AS ogtt_nhof_tally,
                  SUM(ogtt = 'nh_ip_male') AS ogtt_nhipm_tally,
                  SUM(ogtt = 'nh_ip_female') AS ogtt_nhipf_tally,

                  -- LDH
                    SUM(ldh = 'hans_opd_male') AS ldh_hansom_tally,
                    SUM(ldh = 'hans_opd_female') AS ldh_hansof_tally,
                    SUM(ldh = 'hans_ip_male') AS ldh_hansipm_tally,
                    SUM(ldh = 'hans_ip_female') AS ldh_hansipf_tally,

                    SUM(ldh = 'nh_opd_male') AS ldh_nhom_tally,
                    SUM(ldh = 'nh_opd_female') AS ldh_nhof_tally,
                    SUM(ldh = 'nh_ip_male') AS ldh_nhipm_tally,
                    SUM(ldh = 'nh_ip_female') AS ldh_nhipf_tally,

                    -- MG
                    SUM(mg = 'hans_opd_male') AS mg_hansom_tally,
                    SUM(mg = 'hans_opd_female') AS mg_hansof_tally,
                    SUM(mg = 'hans_ip_male') AS mg_hansipm_tally,
                    SUM(mg = 'hans_ip_female') AS mg_hansipf_tally,

                    SUM(mg = 'nh_opd_male') AS mg_nhom_tally,
                    SUM(mg = 'nh_opd_female') AS mg_nhof_tally,
                    SUM(mg = 'nh_ip_male') AS mg_nhipm_tally,
                    SUM(mg = 'nh_ip_female') AS mg_nhipf_tally,

                    -- TOTAL BILIRUBIN
                    SUM(total_bilirubin = 'hans_opd_male') AS tbili_hansom_tally,
                    SUM(total_bilirubin = 'hans_opd_female') AS tbili_hansof_tally,
                    SUM(total_bilirubin = 'hans_ip_male') AS tbili_hansipm_tally,
                    SUM(total_bilirubin = 'hans_ip_female') AS tbili_hansipf_tally,

                    SUM(total_bilirubin = 'nh_opd_male') AS tbili_nhom_tally,
                    SUM(total_bilirubin = 'nh_opd_female') AS tbili_nhof_tally,
                    SUM(total_bilirubin = 'nh_ip_male') AS tbili_nhipm_tally,
                    SUM(total_bilirubin = 'nh_ip_female') AS tbili_nhipf_tally,

                    -- DIRECT - BILI
                    SUM(direct_bili = 'hans_opd_male') AS dbili_hansom_tally,
                    SUM(direct_bili = 'hans_opd_female') AS dbili_hansof_tally,
                    SUM(direct_bili = 'hans_ip_male') AS dbili_hansipm_tally,
                    SUM(direct_bili = 'hans_ip_female') AS dbili_hansipf_tally,

                    SUM(direct_bili = 'nh_opd_male') AS dbili_nhom_tally,
                    SUM(direct_bili = 'nh_opd_female') AS dbili_nhof_tally,
                    SUM(direct_bili = 'nh_ip_male') AS dbili_nhipm_tally,
                    SUM(direct_bili = 'nh_ip_female') AS dbili_nhipf_tally,

                    -- INDIRECT BILI
                    SUM(indirect_bili = 'hans_opd_male') AS indbili_hansom_tally,
                    SUM(indirect_bili = 'hans_opd_female') AS indbili_hansof_tally,
                    SUM(indirect_bili = 'hans_ip_male') AS indbili_hansipm_tally,
                    SUM(indirect_bili = 'hans_ip_female') AS indbili_hansipf_tally,

                    SUM(indirect_bili = 'nh_opd_male') AS indbili_nhom_tally,
                    SUM(indirect_bili = 'nh_opd_female') AS indbili_nhof_tally,
                    SUM(indirect_bili = 'nh_ip_male') AS indbili_nhipm_tally,
                    SUM(indirect_bili = 'nh_ip_female') AS indbili_nhipf_tally,

                    -- PHOSPHOROUS
                    SUM(phosphorous = 'hans_opd_male') AS phos_hansom_tally,
                    SUM(phosphorous = 'hans_opd_female') AS phos_hansof_tally,
                    SUM(phosphorous = 'hans_ip_male') AS phos_hansipm_tally,
                    SUM(phosphorous = 'hans_ip_female') AS phos_hansipf_tally,

                    SUM(phosphorous = 'nh_opd_male') AS phos_nhom_tally,
                    SUM(phosphorous = 'nh_opd_female') AS phos_nhof_tally,
                    SUM(phosphorous = 'nh_ip_male') AS phos_nhipm_tally,
                    SUM(phosphorous = 'nh_ip_female') AS phos_nhipf_tally


          FROM census_lab";



$stmt = $con->prepare($query);
// execute query
$stmt->execute();
 
// get total rows
$row = $stmt->fetch(PDO::FETCH_ASSOC);

// HGT
$hgt_hansom_tally = $row['hgt_hansom_tally'];
$hgt_hansof_tally = $row['hgt_hansof_tally'];
$hgt_hansipm_tally = $row['hgt_hansipm_tally'];
$hgt_hansipf_tally = $row['hgt_hansipf_tally'];

$hgt_nhom_tally = $row['hgt_nhom_tally'];
$hgt_nhof_tally = $row['hgt_nhof_tally'];
$hgt_nhipm_tally = $row['hgt_nhipm_tally'];
$hgt_nhipf_tally = $row['hgt_nhipf_tally'];

// RBS
$rbs_hansom_tally = $row['rbs_hansom_tally'];
$rbs_hansof_tally = $row['rbs_hansof_tally'];
$rbs_hansipm_tally = $row['rbs_hansipm_tally'];
$rbs_hansipf_tally = $row['rbs_hansipf_tally'];

$rbs_nhom_tally = $row['rbs_nhom_tally'];
$rbs_nhof_tally = $row['rbs_nhof_tally'];
$rbs_nhipm_tally = $row['rbs_nhipm_tally'];
$rbs_nhipf_tally = $row['rbs_nhipf_tally'];

// FBS
$fbs_hansom_tally = $row['fbs_hansom_tally'];
$fbs_hansof_tally = $row['fbs_hansof_tally'];
$fbs_hansipm_tally = $row['fbs_hansipm_tally'];
$fbs_hansipf_tally = $row['fbs_hansipf_tally'];

$fbs_nhom_tally = $row['fbs_nhom_tally'];
$fbs_nhof_tally = $row['fbs_nhof_tally'];
$fbs_nhipm_tally = $row['fbs_nhipm_tally'];
$fbs_nhipf_tally = $row['fbs_nhipf_tally'];

// BUN
$bun_hansom_tally = $row['bun_hansom_tally'];
$bun_hansof_tally = $row['bun_hansof_tally'];
$bun_hansipm_tally = $row['bun_hansipm_tally'];
$bun_hansipf_tally = $row['bun_hansipf_tally'];

$bun_nhom_tally = $row['bun_nhom_tally'];
$bun_nhof_tally = $row['bun_nhof_tally'];
$bun_nhipm_tally = $row['bun_nhipm_tally'];
$bun_nhipf_tally = $row['bun_nhipf_tally'];

// BUA
$bua_hansom_tally = $row['bua_hansom_tally'];
$bua_hansof_tally = $row['bua_hansof_tally'];
$bua_hansipm_tally = $row['bua_hansipm_tally'];
$bua_hansipf_tally = $row['bua_hansipf_tally'];

$bua_nhom_tally = $row['bua_nhom_tally'];
$bua_nhof_tally = $row['bua_nhof_tally'];
$bua_nhipm_tally = $row['bua_nhipm_tally'];
$bua_nhipf_tally = $row['bua_nhipf_tally'];

// CHOLESTEROL
$chol_hansom_tally = $row['chol_hansom_tally'];
$chol_hansof_tally = $row['chol_hansof_tally'];
$chol_hansipm_tally = $row['chol_hansipm_tally'];
$chol_hansipf_tally = $row['chol_hansipf_tally'];

$chol_nhom_tally = $row['chol_nhom_tally'];
$chol_nhof_tally = $row['chol_nhof_tally'];
$chol_nhipm_tally = $row['chol_nhipm_tally'];
$chol_nhipf_tally = $row['chol_nhipf_tally'];

// CREATININE
$crea_hansom_tally = $row['crea_hansom_tally'];
$crea_hansof_tally = $row['crea_hansof_tally'];
$crea_hansipm_tally = $row['crea_hansipm_tally'];
$crea_hansipf_tally = $row['crea_hansipf_tally'];

$crea_nhom_tally = $row['crea_nhom_tally'];
$crea_nhof_tally = $row['crea_nhof_tally'];
$crea_nhipm_tally = $row['crea_nhipm_tally'];
$crea_nhipf_tally = $row['crea_nhipf_tally'];

// TOTAL PROTEIN
$t_pro_hansom_tally = $row['t_pro_hansom_tally'];
$t_pro_hansof_tally = $row['t_pro_hansof_tally'];
$t_pro_hansipm_tally = $row['t_pro_hansipm_tally'];
$t_pro_hansipf_tally = $row['t_pro_hansipf_tally'];

$t_pro_nhom_tally = $row['t_pro_nhom_tally'];
$t_pro_nhof_tally = $row['t_pro_nhof_tally'];
$t_pro_nhipm_tally = $row['t_pro_nhipm_tally'];
$t_pro_nhipf_tally = $row['t_pro_nhipf_tally'];

// ALBUMIN
$alb_hansom_tally = $row['alb_hansom_tally'];
$alb_hansof_tally = $row['alb_hansof_tally'];
$alb_hansipm_tally = $row['alb_hansipm_tally'];
$alb_hansipf_tally = $row['alb_hansipf_tally'];

$alb_nhom_tally = $row['alb_nhom_tally'];
$alb_nhof_tally = $row['alb_nhof_tally'];
$alb_nhipm_tally = $row['alb_nhipm_tally'];
$alb_nhipf_tally = $row['alb_nhipf_tally'];

// GLOBULIN
$glo_hansom_tally = $row['glo_hansom_tally'];
$glo_hansof_tally = $row['glo_hansof_tally'];
$glo_hansipm_tally = $row['glo_hansipm_tally'];
$glo_hansipf_tally = $row['glo_hansipf_tally'];

$glo_nhom_tally = $row['glo_nhom_tally'];
$glo_nhof_tally = $row['glo_nhof_tally'];
$glo_nhipm_tally = $row['glo_nhipm_tally'];
$glo_nhipf_tally = $row['glo_nhipf_tally'];

// A/G RATIO
$agr_hansom_tally = $row['agr_hansom_tally'];
$agr_hansof_tally = $row['agr_hansof_tally'];
$agr_hansipm_tally = $row['agr_hansipm_tally'];
$agr_hansipf_tally = $row['agr_hansipf_tally'];

$agr_nhom_tally = $row['agr_nhom_tally'];
$agr_nhof_tally = $row['agr_nhof_tally'];
$agr_nhipm_tally = $row['agr_nhipm_tally'];
$agr_nhipf_tally = $row['agr_nhipf_tally'];

// SGOT
$sgot_hansom_tally = $row['sgot_hansom_tally'];
$sgot_hansof_tally = $row['sgot_hansof_tally'];
$sgot_hansipm_tally = $row['sgot_hansipm_tally'];
$sgot_hansipf_tally = $row['sgot_hansipf_tally'];

$sgot_nhom_tally = $row['sgot_nhom_tally'];
$sgot_nhof_tally = $row['sgot_nhof_tally'];
$sgot_nhipm_tally = $row['sgot_nhipm_tally'];
$sgot_nhipf_tally = $row['sgot_nhipf_tally'];

// SGPT
$sgpt_hansom_tally = $row['sgpt_hansom_tally'];
$sgpt_hansof_tally = $row['sgpt_hansof_tally'];
$sgpt_hansipm_tally = $row['sgpt_hansipm_tally'];
$sgpt_hansipf_tally = $row['sgpt_hansipf_tally'];

$sgpt_nhom_tally = $row['sgpt_nhom_tally'];
$sgpt_nhof_tally = $row['sgpt_nhof_tally'];
$sgpt_nhipm_tally = $row['sgpt_nhipm_tally'];
$sgpt_nhipf_tally = $row['sgpt_nhipf_tally'];

// ALP
$alp_hansom_tally = $row['alp_hansom_tally'];
$alp_hansof_tally = $row['alp_hansof_tally'];
$alp_hansipm_tally = $row['alp_hansipm_tally'];
$alp_hansipf_tally = $row['alp_hansipf_tally'];

$alp_nhom_tally = $row['alp_nhom_tally'];
$alp_nhof_tally = $row['alp_nhof_tally'];
$alp_nhipm_tally = $row['alp_nhipm_tally'];
$alp_nhipf_tally = $row['alp_nhipf_tally'];

// TRIGLY
$trigly_hansom_tally = $row['trigly_hansom_tally'];
$trigly_hansof_tally = $row['trigly_hansof_tally'];
$trigly_hansipm_tally = $row['trigly_hansipm_tally'];
$trigly_hansipf_tally = $row['trigly_hansipf_tally'];

$trigly_nhom_tally = $row['trigly_nhom_tally'];
$trigly_nhof_tally = $row['trigly_nhof_tally'];
$trigly_nhipm_tally = $row['trigly_nhipm_tally'];
$trigly_nhipf_tally = $row['trigly_nhipf_tally'];

// HDL-CHOLE
$hdlc_hansom_tally = $row['hdlc_hansom_tally'];
$hdlc_hansof_tally = $row['hdlc_hansof_tally'];
$hdlc_hansipm_tally = $row['hdlc_hansipm_tally'];
$hdlc_hansipf_tally = $row['hdlc_hansipf_tally'];

$hdlc_nhom_tally = $row['hdlc_nhom_tally'];
$hdlc_nhof_tally = $row['hdlc_nhof_tally'];
$hdlc_nhipm_tally = $row['hdlc_nhipm_tally'];
$hdlc_nhipf_tally = $row['hdlc_nhipf_tally'];

// LDL-CHOLE
$ldlc_hansom_tally = $row['ldlc_hansom_tally'];
$ldlc_hansof_tally = $row['ldlc_hansof_tally'];
$ldlc_hansipm_tally = $row['ldlc_hansipm_tally'];
$ldlc_hansipf_tally = $row['ldlc_hansipf_tally'];

$ldlc_nhom_tally = $row['ldlc_nhom_tally'];
$ldlc_nhof_tally = $row['ldlc_nhof_tally'];
$ldlc_nhipm_tally = $row['ldlc_nhipm_tally'];
$ldlc_nhipf_tally = $row['ldlc_nhipf_tally'];

// VLDL
$vldl_hansom_tally = $row['vldl_hansom_tally'];
$vldl_hansof_tally = $row['vldl_hansof_tally'];
$vldl_hansipm_tally = $row['vldl_hansipm_tally'];
$vldl_hansipf_tally = $row['vldl_hansipf_tally'];

$vldl_nhom_tally = $row['vldl_nhom_tally'];
$vldl_nhof_tally = $row['vldl_nhof_tally'];
$vldl_nhipm_tally = $row['vldl_nhipm_tally'];
$vldl_nhipf_tally = $row['vldl_nhipf_tally'];

// SODIUM
$sodium_hansom_tally = $row['sodium_hansom_tally'];
$sodium_hansof_tally = $row['sodium_hansof_tally'];
$sodium_hansipm_tally = $row['sodium_hansipm_tally'];
$sodium_hansipf_tally = $row['sodium_hansipf_tally'];

$sodium_nhom_tally = $row['sodium_nhom_tally'];
$sodium_nhof_tally = $row['sodium_nhof_tally'];
$sodium_nhipm_tally = $row['sodium_nhipm_tally'];
$sodium_nhipf_tally = $row['sodium_nhipf_tally'];

// POTASSIUM
$pot_hansom_tally = $row['pot_hansom_tally'];
$pot_hansof_tally = $row['pot_hansof_tally'];
$pot_hansipm_tally = $row['pot_hansipm_tally'];
$pot_hansipf_tally = $row['pot_hansipf_tally'];

$pot_nhom_tally = $row['pot_nhom_tally'];
$pot_nhof_tally = $row['pot_nhof_tally'];
$pot_nhipm_tally = $row['pot_nhipm_tally'];
$pot_nhipf_tally = $row['pot_nhipf_tally'];

// CHLORIDE
$chloride_hansom_tally = $row['chloride_hansom_tally'];
$chloride_hansof_tally = $row['chloride_hansof_tally'];
$chloride_hansipm_tally = $row['chloride_hansipm_tally'];
$chloride_hansipf_tally = $row['chloride_hansipf_tally'];

$chloride_nhom_tally = $row['chloride_nhom_tally'];
$chloride_nhof_tally = $row['chloride_nhof_tally'];
$chloride_nhipm_tally = $row['chloride_nhipm_tally'];
$chloride_nhipf_tally = $row['chloride_nhipf_tally'];

// HBA1c
$dba_c_hansom_tally = $row['dba_c_hansom_tally'];
$dba_c_hansof_tally = $row['dba_c_hansof_tally'];
$dba_c_hansipm_tally = $row['dba_c_hansipm_tally'];
$dba_c_hansipf_tally = $row['dba_c_hansipf_tally'];

$dba_c_nhom_tally = $row['dba_c_nhom_tally'];
$dba_c_nhof_tally = $row['dba_c_nhof_tally'];
$dba_c_nhipm_tally = $row['dba_c_nhipm_tally'];
$dba_c_nhipf_tally = $row['dba_c_nhipf_tally'];

// AMYLASE
$amylase_hansom_tally = $row['amylase_hansom_tally'];
$amylase_hansof_tally = $row['amylase_hansof_tally'];
$amylase_hansipm_tally = $row['amylase_hansipm_tally'];
$amylase_hansipf_tally = $row['amylase_hansipf_tally'];

$amylase_nhom_tally = $row['amylase_nhom_tally'];
$amylase_nhof_tally = $row['amylase_nhof_tally'];
$amylase_nhipm_tally = $row['amylase_nhipm_tally'];
$amylase_nhipf_tally = $row['amylase_nhipf_tally'];

// I Ca
$i_ca_hansom_tally = $row['i_ca_hansom_tally'];
$i_ca_hansof_tally = $row['i_ca_hansof_tally'];
$i_ca_hansipm_tally = $row['i_ca_hansipm_tally'];
$i_ca_hansipf_tally = $row['i_ca_hansipf_tally'];

$i_ca_nhom_tally = $row['i_ca_nhom_tally'];
$i_ca_nhof_tally = $row['i_ca_nhof_tally'];
$i_ca_nhipm_tally = $row['i_ca_nhipm_tally'];
$i_ca_nhipf_tally = $row['i_ca_nhipf_tally'];

// OGTT
$ogtt_hansom_tally = $row['ogtt_hansom_tally'];
$ogtt_hansof_tally = $row['ogtt_hansof_tally'];
$ogtt_hansipm_tally = $row['ogtt_hansipm_tally'];
$ogtt_hansipf_tally = $row['ogtt_hansipf_tally'];

$ogtt_nhom_tally = $row['ogtt_nhom_tally'];
$ogtt_nhof_tally = $row['ogtt_nhof_tally'];
$ogtt_nhipm_tally = $row['ogtt_nhipm_tally'];
$ogtt_nhipf_tally = $row['ogtt_nhipf_tally'];

// LDH
$ldh_hansom_tally = $row['ldh_hansom_tally'];
$ldh_hansof_tally = $row['ldh_hansof_tally'];
$ldh_hansipm_tally = $row['ldh_hansipm_tally'];
$ldh_hansipf_tally = $row['ldh_hansipf_tally'];

$ldh_nhom_tally = $row['ldh_nhom_tally'];
$ldh_nhof_tally = $row['ldh_nhof_tally'];
$ldh_nhipm_tally = $row['ldh_nhipm_tally'];
$ldh_nhipf_tally = $row['ldh_nhipf_tally'];

// MG
$mg_hansom_tally = $row['mg_hansom_tally'];
$mg_hansof_tally = $row['mg_hansof_tally'];
$mg_hansipm_tally = $row['mg_hansipm_tally'];
$mg_hansipf_tally = $row['mg_hansipf_tally'];

$mg_nhom_tally = $row['mg_nhom_tally'];
$mg_nhof_tally = $row['mg_nhof_tally'];
$mg_nhipm_tally = $row['mg_nhipm_tally'];
$mg_nhipf_tally = $row['mg_nhipf_tally'];

// TOTAL BILIRUBIN
$tbili_hansom_tally = $row['tbili_hansom_tally'];
$tbili_hansof_tally = $row['tbili_hansof_tally'];
$tbili_hansipm_tally = $row['tbili_hansipm_tally'];
$tbili_hansipf_tally = $row['tbili_hansipf_tally'];

$tbili_nhom_tally = $row['tbili_nhom_tally'];
$tbili_nhof_tally = $row['tbili_nhof_tally'];
$tbili_nhipm_tally = $row['tbili_nhipm_tally'];
$tbili_nhipf_tally = $row['tbili_nhipf_tally'];

// DIRECT BILI
$dbili_hansom_tally = $row['dbili_hansom_tally'];
$dbili_hansof_tally = $row['dbili_hansof_tally'];
$dbili_hansipm_tally = $row['dbili_hansipm_tally'];
$dbili_hansipf_tally = $row['dbili_hansipf_tally'];

$dbili_nhom_tally = $row['dbili_nhom_tally'];
$dbili_nhof_tally = $row['dbili_nhof_tally'];
$dbili_nhipm_tally = $row['dbili_nhipm_tally'];
$dbili_nhipf_tally = $row['dbili_nhipf_tally'];

// INDIRECT BILI
$indbili_hansom_tally = $row['indbili_hansom_tally'];
$indbili_hansof_tally = $row['indbili_hansof_tally'];
$indbili_hansipm_tally = $row['indbili_hansipm_tally'];
$indbili_hansipf_tally = $row['indbili_hansipf_tally'];

$indbili_nhom_tally = $row['indbili_nhom_tally'];
$indbili_nhof_tally = $row['indbili_nhof_tally'];
$indbili_nhipm_tally = $row['indbili_nhipm_tally'];
$indbili_nhipf_tally = $row['indbili_nhipf_tally'];

// PHOSPHORUS
$phos_hansom_tally = $row['phos_hansom_tally'];
$phos_hansof_tally = $row['phos_hansof_tally'];
$phos_hansipm_tally = $row['phos_hansipm_tally'];
$phos_hansipf_tally = $row['phos_hansipf_tally'];

$phos_nhom_tally = $row['phos_nhom_tally'];
$phos_nhof_tally = $row['phos_nhof_tally'];
$phos_nhipm_tally = $row['phos_nhipm_tally'];
$phos_nhipf_tally = $row['phos_nhipf_tally'];
