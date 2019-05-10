<?php
/**
 * Created by Vinay Jaiswal.
 * User: Toyota
 * Date: 26-02-2019
 */

//Start session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

//Include database
include 'db.php';


/*
 * insert update products
 */
if(isset($_POST['type']) && $_POST['type'] == "CIO_DATA")
{
    $msg = '';
    $success = false;
    $data = array();
    extract($_POST);
    $date = date('Y-m-d H:i:s');

    //setting in session
    $hypervisor_in_environment = implode(',', $hypervisor_in_environment);
    $public_cloud = implode(',', $public_cloud);
    $multi_cloud_environment_deploy = implode(',', $multi_cloud_environment_deploy);
    $application_public_cloud = implode(',', $application_public_cloud);
    $desktop_virtualization_case = implode(',', $desktop_virtualization_case);
    $enterprise_mobility_case = implode(',', $enterprise_mobility_case);
    $window_users = implode(',', $window_users);
    $modern_management = implode(',', $modern_management);


    //echo '<pre>';
    //var_dump($_POST);


    $sql = "INSERT INTO `vmware_cio_data`( `name_of_organization`, `name_of_nominator`, `email_of_nominator`, `number_of_nominator`, `it_head`, `no_of_datacenter`, `datacenter_virtualized`, `business_application`, `multi_hypervisor_environment`, `hypervisor_in_environment`, `software_defined_network`, `software_defined_network_text`, `hyper_converged_infra`, `hyper_converged_infra_text`, `software_defined_solution`, `software_defined_solution_text`, `multi_cloud_environment`, `multi_cloud_environment_text`, `multi_cloud_environment_deploy`, `other_environment_text`, `public_cloud`, `application_public_cloud`, `hybrid_cloud`, `hybrid_cloud_text`, `desktop_virtualization`, `desktop_virtualization_case`, `desktop_virtualization_solution`, `enterprise_mobility`, `enterprise_mobility_case`, `window_users`, `modern_management`, `management_endpoint_text`, `datacenter_security_per`, `security_breach`, `security_breach_text`, `datacenter_traffic_percent`, `zero_trust_security`, `zero_trust_security_text`, `detail_text`) 
            VALUES ('$name_of_organization','$name_of_nominator','$email_of_nominator','$number_of_nominator','$it_head','$no_of_datacenter','$datacenter_virtualized','$business_application','$multi_hypervisor_environment','$hypervisor_in_environment','$software_defined_network','$software_defined_network_text','$hyper_converged_infra','$hyper_converged_infra_text','$software_defined_solution','$software_defined_solution_text','$multi_cloud_environment','$multi_cloud_environment_text','$multi_cloud_environment_deploy','$other_environment_text','$public_cloud','$application_public_cloud','$hybrid_cloud','$hybrid_cloud_text','$desktop_virtualization','$desktop_virtualization_case','$desktop_virtualization_solution','$enterprise_mobility','$enterprise_mobility_case','$window_users','$modern_management','$management_endpoint_text','$datacenter_security_per','$security_breach','$security_breach_text','$datacenter_traffic_percent','$zero_trust_security','$zero_trust_security_text','$detail_text')";

    $insert = $db->query( $sql );
    if( $insert ){
        $success = true;
        $msg  = "Data inserted successfully.";
    }else{
        $msg = "Something went wrong.Please try again later.";
    }


    $data = array( 'msg' => $msg, 'success' => $success  );

    echo json_encode($data);
}


$db->close();