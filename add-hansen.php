<?php
        if($_POST['btn_hans']){

            require_once 'config/database.php';

            try{
             
                // insert query
                $query = "INSERT INTO 
                                    census_lab 
                                SET 
                                    nh_o_hans=:nh_o_hans, 
                                    hgt=:hgt, 
                                    rbs=:rbs, 
                                    fbs=:fbs, 
                                    bun=:bun, 
                                    bua=:bua,
                                    cholesterol=:cholesterol, 
                                    creatinine=:creatinine, 
                                    total_protein=:total_protein, 
                                    albumin=:albumin,
                                    globulin=:globulin, 
                                    ag_ratio=:ag_ratio, 
                                    sgot=:sgot, 
                                    sgpt=:sgpt, 
                                    alp=:alp, 
                                    trigly=:trigly, 
                                    hdl_chole=:hdl_chole, 
                                    ldl_chole=:ldl_chole, 
                                    vldl=:vldl, 
                                    sodium=:sodium, 
                                    potassium=:potassium, 
                                    chloride=:chloride,
                                    dba_c=:dba_c,
                                    amylase=:amylase,
                                    i_ca=:i_ca,
                                    ogtt=:ogtt, 
                                    ldh=:ldh, 
                                    mg=:mg, 
                                    total_bilirubin=:total_bilirubin,
                                    direct_bili=:direct_bili,
                                    indirect_bili=:indirect_bili,
                                    phosphorous=:phosphorous
                                    "; 

                // prepare query for execution
                $stmt = $con->prepare($query);
                 
                $hansen=htmlspecialchars(strip_tags($_POST['hansen']));
                $hgtRadio=htmlspecialchars(strip_tags($_POST['hans_hgtRadio']));
                $rbsRadio=htmlspecialchars(strip_tags($_POST['hans_rbsRadio']));
                $fbsRadio=htmlspecialchars(strip_tags($_POST['hans_fbsRadio']));
                $bunRadio=htmlspecialchars(strip_tags($_POST['hans_bunRadio']));
                $buaRadio=htmlspecialchars(strip_tags($_POST['hans_buaRadio']));
                $cholRadio=htmlspecialchars(strip_tags($_POST['hans_cholRadio']));
                $creaRadio=htmlspecialchars(strip_tags($_POST['hans_creaRadio']));
                $t_proRadio=htmlspecialchars(strip_tags($_POST['hans_t_proRadio']));
                $albRadio=htmlspecialchars(strip_tags($_POST['hans_albRadio']));
                $gloRadio=htmlspecialchars(strip_tags($_POST['hans_gloRadio']));
                $agrRadio=htmlspecialchars(strip_tags($_POST['hans_agrRadio']));
                $sgotRadio=htmlspecialchars(strip_tags($_POST['hans_sgotRadio']));
                $sgptRadio=htmlspecialchars(strip_tags($_POST['hans_sgptRadio']));
                $alpRadio=htmlspecialchars(strip_tags($_POST['hans_alpRadio']));
                $triRadio=htmlspecialchars(strip_tags($_POST['hans_triRadio']));
                $hdlcRadio=htmlspecialchars(strip_tags($_POST['hans_hdlcRadio']));
                $ldlcRadio=htmlspecialchars(strip_tags($_POST['hans_ldlcRadio']));
                $vldlRadio=htmlspecialchars(strip_tags($_POST['hans_vldlRadio']));
                $sodRadio=htmlspecialchars(strip_tags($_POST['hans_sodRadio']));
                $potRadio=htmlspecialchars(strip_tags($_POST['hans_potRadio']));
                $chloRadio=htmlspecialchars(strip_tags($_POST['hans_chloRadio']));
                $hbaRadio=htmlspecialchars(strip_tags($_POST['hans_hbaRadio']));
                $amyRadio=htmlspecialchars(strip_tags($_POST['hans_amyRadio']));
                $icaRadio=htmlspecialchars(strip_tags($_POST['hans_icaRadio']));
                $ogttRadio=htmlspecialchars(strip_tags($_POST['hans_ogttRadio']));
                $ldhRadio=htmlspecialchars(strip_tags($_POST['hans_ldhRadio']));
                $mgRadio=htmlspecialchars(strip_tags($_POST['hans_mgRadio']));
                $tbiliRadio=htmlspecialchars(strip_tags($_POST['hans_tbiliRadio']));
                $dbiliRadio=htmlspecialchars(strip_tags($_POST['hans_dbiliRadio']));
                $indbiliRadio=htmlspecialchars(strip_tags($_POST['hans_indbiliRadio']));
                $phosRadio=htmlspecialchars(strip_tags($_POST['hans_phosRadio']));
                 
                // bind the parameters
                $stmt->bindParam(':nh_o_hans', $hansen);
                $stmt->bindParam(':hgt', $hgtRadio);
                $stmt->bindParam(':rbs', $rbsRadio);
                $stmt->bindParam(':fbs', $fbsRadio);
                $stmt->bindParam(':bun', $bunRadio);
                $stmt->bindParam(':bua', $buaRadio);
                $stmt->bindParam(':cholesterol', $cholRadio);
                $stmt->bindParam(':creatinine', $creaRadio);
                $stmt->bindParam(':total_protein', $t_proRadio);
                $stmt->bindParam(':albumin', $albRadio);
                $stmt->bindParam(':globulin', $gloRadio);
                $stmt->bindParam(':ag_ratio', $agrRadio);
                $stmt->bindParam(':sgot', $sgotRadio);
                $stmt->bindParam(':sgpt', $sgptRadio);
                $stmt->bindParam(':alp', $alpRadio);
                $stmt->bindParam(':trigly', $triRadio);
                $stmt->bindParam(':hdl_chole', $hdlcRadio);
                $stmt->bindParam(':ldl_chole', $ldlcRadio);
                $stmt->bindParam(':vldl', $vldlRadio);
                $stmt->bindParam(':sodium', $sodRadio);
                $stmt->bindParam(':potassium', $potRadio);
                $stmt->bindParam(':chloride', $chloRadio);
                $stmt->bindParam(':dba_c', $hbaRadio);
                $stmt->bindParam(':amylase', $amyRadio);
                $stmt->bindParam(':i_ca', $icaRadio);
                $stmt->bindParam(':ogtt', $ogttRadio);
                $stmt->bindParam(':ldh', $ldhRadio);
                $stmt->bindParam(':mg', $mgRadio);
                $stmt->bindParam(':total_bilirubin', $tbiliRadio);
                $stmt->bindParam(':direct_bili', $dbiliRadio);
                $stmt->bindParam(':indirect_bili', $indbiliRadio);
                $stmt->bindParam(':phosphorous', $phosRadio);
                
                // $stmt->bindParam(':icu', $icuCheck);
                 
                // Execute the query
                if($stmt->execute()){
                    header('Location: index.php');
                }else{
                    echo "<script>alert('Unable to save record.')</script>";
                }
                 
            }
             
            // show error
            catch(PDOException $exception){
                die('ERROR: ' . $exception->getMessage());
            }
        }
        ?>