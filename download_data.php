<?php

//database connection
require_once 'config/db.php';


$sql = "SELECT * FROM `vmware_cio_data`";
$que = $db->query( $sql );
$data_array = array();

if($que->num_rows > 0) {
    $i = 0;
    $developer_records[] = array( 'Sr No', 'Name of Organization', 'Name of Nominator', 'Official email of Nominator', 'Contact number of Nominator', 'Name of the CIO / IT Head', 'How many datacenters do you have?', 'What percentage of your datacenters are virtualized?', 'Key business critical applications that have been virtualized ', 'Do you have a Multi Hypervisor environment?', 'If yes, which hypervisors do you use in your environment ?', 'Have you deployed Software Defined Networking/Network Virtualization solution?', 'If yes, please share details on the solution', 'Have you deployed Hyper-converged Infra/ Software Defined Storage solution?', 'If yes, please share details on the solution', 'Have you deployed Software Defined Storage solution?', 'If yes, please share details on the solution', 'Do you have a multi-cloud environment?', 'If yes, please share details', 'If yes, what have you deployed', 'Others', 'Which Public Cloud providers do you work with?', 'Applications that are deployed on Public Cloud', 'Have you integrated your private and Public Cloud environments (Hybrid Cloud)', 'If yes, please share details', 'Have you implemented Desktop virtualization (VDI) for your end users', 'If yes, what is the use-case?', 'If yes, which solution do you use?', 'Have you implemented Enterprise Mobility solution for your end users', 'If yes, what is the use-case?', 'How many end-points are you running on Windows 10 in your environment today?', 'Which solution do you use for modern management of Windows 10 endpoints?', 'Other Details', 'What is your biggest concern around management of these endpoints?', 'What percentage of your IT spend is around Datacenter Security?', 'Have you had a security breach in the last 12-18 months in your Datacenter?', 'If yes, please share details', 'What percentage of your Datacenter traffic is East-West as compared to North-South?', 'Have you implemented (Zero Trust Security) Architecture in your Datacenter?', 'If yes, please share details', 'Please share the details on IT Innovations carried out in past 12 months which has resulted in significant business benefits, exceptional experiences for your end users', 'Date Time' );

    while ($row = $que->fetch_assoc()) {
        $i++;
        $developer_records[] = array( $i ,$row['name_of_organization'], $row['name_of_nominator'], $row['email_of_nominator'], $row['number_of_nominator'], $row['it_head'] ,$row['no_of_datacenter'], $row['datacenter_virtualized'], $row['business_application'], $row['multi_hypervisor_environment'], $row['hypervisor_in_environment'], $row['software_defined_network'], $row['software_defined_network_text'], $row['hyper_converged_infra'], $row['hyper_converged_infra_text'], $row['software_defined_solution'], $row['software_defined_solution_text'], $row['multi_cloud_environment'], $row['multi_cloud_environment_text'], $row['multi_cloud_environment_deploy'], $row['other_environment_text'], $row['public_cloud'], $row['application_public_cloud'], $row['hybrid_cloud'], $row['hybrid_cloud_text'], $row['desktop_virtualization'], $row['desktop_virtualization_case'], $row['desktop_virtualization_solution'], $row['enterprise_mobility'], $row['enterprise_mobility_case'], $row['window_users'], $row['modern_management'], $row['other_management_text'], $row['management_endpoint_text'], $row['datacenter_security_per'], $row['security_breach'], $row['security_breach_text'], $row['datacenter_traffic_percent'], $row['zero_trust_security'], $row['zero_trust_security_text'], $row['detail_text'], $row['dateTime'] );
    }
}

$filename = "export_".date('Ymd') . ".xls";
header("Content-Type: application/vnd.ms-excel; charset=UTF-8; encoding=UTF-8");
header("Content-Disposition: attachment; filename=\"$filename\"");
$show_coloumn = false;
if(!empty($developer_records)) {
    foreach($developer_records as $record) {
        if(!$show_coloumn) {
            // display field/column names in first row
            //echo implode("\t", array_keys($record)) . "\n";
            $show_coloumn = true;
        }
        echo implode("\t", array_values($record)) . "\n";
        //echo implode("\t", array_values($record)) . "\n";
    }
}

$db->close();
exit;

?>

