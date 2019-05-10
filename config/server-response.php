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
    $date = date('Y-m-d H:i:s');


    //setting in session
    $other_management_text = '';
    $software_defined_network_text = '';
    $hyper_converged_infra_text = '';

    $hypervisor_in_environment = array();
    $public_cloud = array();
    $multi_cloud_environment_deploy = array();
    $application_public_cloud = array();
    $desktop_virtualization_case = array();
    $enterprise_mobility_case = array();
    $window_users = array();
    $modern_management = array();
    $desktop_virtualization_solution = array();

    extract($_POST);


    $hypervisor_in_environment = implode(',', $hypervisor_in_environment);
    $public_cloud = implode(',', $public_cloud);
    $multi_cloud_environment_deploy = implode(',', $multi_cloud_environment_deploy);
    $application_public_cloud = implode(',', $application_public_cloud);
    $desktop_virtualization_case = implode(',', $desktop_virtualization_case);
    $enterprise_mobility_case = implode(',', $enterprise_mobility_case);
    $window_users = implode(',', $window_users);
    $modern_management = implode(',', $modern_management);
    $desktop_virtualization_solution = implode(',', $desktop_virtualization_solution);


    //echo '<pre>';
    //var_dump($_POST);
    $name_of_organization = $db->real_escape_string( isset( $name_of_organization ) ? $name_of_organization : '');
    $name_of_nominator = $db->real_escape_string( isset( $name_of_nominator ) ? $name_of_nominator : '');
    $it_head = $db->real_escape_string( isset($it_head) ? $it_head : '');

    $business_application = $db->real_escape_string(isset( $business_application ) ? $business_application : '');
    $software_defined_network_text = $db->real_escape_string( isset( $software_defined_network_text ) ? $software_defined_network_text : '');
    $hyper_converged_infra_text = $db->real_escape_string( isset( $hyper_converged_infra_text ) ? $hyper_converged_infra_text : '');
    $software_defined_solution_text = $db->real_escape_string( isset( $software_defined_solution_text ) ? $software_defined_solution_text : '');
    $multi_cloud_environment_text = $db->real_escape_string( isset( $multi_cloud_environment_text ) ? $multi_cloud_environment_text : '');
    $hybrid_cloud_text = $db->real_escape_string( isset( $hybrid_cloud_text ) ? $hybrid_cloud_text : '');
    $management_endpoint_text = $db->real_escape_string( isset($management_endpoint_text ) ? $management_endpoint_text : '');
    $security_breach_text = $db->real_escape_string( isset($security_breach_text ) ? $security_breach_text : '');
    $zero_trust_security_text = $db->real_escape_string( isset( $zero_trust_security_text ) ? $zero_trust_security_text : '');
    $detail_text = $db->real_escape_string( isset($detail_text) ? $detail_text : '');
    $other_management_text = $db->real_escape_string( isset($other_management_text) ? $other_management_text : '');

    //Radio button
    $multi_hypervisor_environment = isset( $multi_hypervisor_environment ) ? $multi_hypervisor_environment : 'Yes';
    $software_defined_network = isset( $software_defined_network ) ? $software_defined_network : 'Yes';
    $hyper_converged_infra = isset( $hyper_converged_infra ) ? $hyper_converged_infra : 'Yes';
    $software_defined_solution = isset( $software_defined_solution ) ? $software_defined_solution : 'Yes';
    $multi_cloud_environment = isset( $multi_cloud_environment ) ? $multi_cloud_environment : 'Yes';
    $hybrid_cloud = isset( $hybrid_cloud ) ? $hybrid_cloud : 'Yes';
    $desktop_virtualization = isset( $desktop_virtualization ) ? $desktop_virtualization : 'Yes';
    $enterprise_mobility = isset( $enterprise_mobility ) ? $enterprise_mobility : 'Yes';
    $security_breach = isset( $security_breach ) ? $security_breach : 'Yes';
    $zero_trust_security = isset( $zero_trust_security ) ? $zero_trust_security : 'Yes';




    $sql = "INSERT INTO `vmware_cio_data`( `name_of_organization`, `name_of_nominator`, `email_of_nominator`, `number_of_nominator`, `it_head`, `no_of_datacenter`, `datacenter_virtualized`, `business_application`, `multi_hypervisor_environment`, `hypervisor_in_environment`, `software_defined_network`, `software_defined_network_text`, `hyper_converged_infra`, `hyper_converged_infra_text`, `software_defined_solution`, `software_defined_solution_text`, `multi_cloud_environment`, `multi_cloud_environment_text`, `multi_cloud_environment_deploy`, `other_environment_text`, `public_cloud`, `application_public_cloud`, `hybrid_cloud`, `hybrid_cloud_text`, `desktop_virtualization`, `desktop_virtualization_case`, `desktop_virtualization_solution`, `enterprise_mobility`, `enterprise_mobility_case`, `window_users`, `modern_management`, `other_management_text`, `management_endpoint_text`, `datacenter_security_per`, `security_breach`, `security_breach_text`, `datacenter_traffic_percent`, `zero_trust_security`, `zero_trust_security_text`, `detail_text`) 
            VALUES ('$name_of_organization','$name_of_nominator','$email_of_nominator','$number_of_nominator','$it_head','$no_of_datacenter','$datacenter_virtualized','$business_application','$multi_hypervisor_environment','$hypervisor_in_environment','$software_defined_network','$software_defined_network_text','$hyper_converged_infra','$hyper_converged_infra_text','$software_defined_solution','$software_defined_solution_text','$multi_cloud_environment','$multi_cloud_environment_text','$multi_cloud_environment_deploy','$other_environment_text','$public_cloud','$application_public_cloud','$hybrid_cloud','$hybrid_cloud_text','$desktop_virtualization','$desktop_virtualization_case','$desktop_virtualization_solution','$enterprise_mobility','$enterprise_mobility_case','$window_users','$modern_management','$other_management_text','$management_endpoint_text','$datacenter_security_per','$security_breach','$security_breach_text','$datacenter_traffic_percent','$zero_trust_security','$zero_trust_security_text','$detail_text')";

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