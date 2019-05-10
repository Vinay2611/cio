<?php
/**
 * Created by PhpStorm.
 * User: vinayj
 * Date: 12-03-2019
 * Time: 12:24
 */

?>

<!doctype html>
<html>

<head>
    <script type="text/javascript">
        (function (id) {
            function append(scriptid, url, async) {
                var d = document, sn = 'script', f = d.getElementsByTagName(sn)[0];
                if (!f) f = d.head;
                var s = d.createElement(sn);
                s.async = true;
                s.id = scriptid;
                s.src = url;
                f.parentNode.insertBefore(s, f);
            }
            function getRootDomain() {
                var parts = window.location.hostname.split('.');
                if (parts.length === 2) rootDomain = parts[0];
                else if (parts.length > 2) {
                    // see if the next to last value is a common tld
                    var part = parts[parts.length - 2];
                    if (part === 'com' || part === 'co') {
                        rootDomain = parts[parts.length - 3]; // go back one more
                    } else {
                        rootDomain = part;
                    }}
                return rootDomain; }
            window.evidon = {};
            window.evidon.id = id;
            var cdn = '//c.evidon.com/', rootDomain = getRootDomain(), noticecdn = cdn + 'sitenotice/';
            append('evidon-notice', noticecdn + 'evidon-sitenotice-tag.js', false);
            append('evidon-location', cdn + 'geo/country.js', true);
            append('evidon-themes', noticecdn + id + '/snthemes.js', true);
            if (rootDomain) append('evidon-settings', noticecdn + id + '/' + rootDomain + '/settings.js', true);
            window.evidon.priorConsentCallback = function () {
            // Add the tags which need to wait for prior consent here.
            // This should be all your advertising tags and probably most of your social and tracking tags.
            }
        })(4478);
    </script>

    <meta charset="utf-8">
    <title>VMware IT Excellence</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css?v=1.0">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://www.vmware.com/content/dam/vmwaredesigns/scraper/non-responsive.css"/>
    <!--<link rel="stylesheet" type="text/css" href="https://www.vmware.com/content/dam/vmwaredesigns/scraper/scrapper-footer.css"/>-->

    <script src="js/jquery.min.js"></script>
    <script src="js/serverjs.js"></script>
    <script>
        //Validation
        if($("#number_of_nominator").val() == "") {
            $("#number_of_nominator").css('border-color','#F00');
            valid = false;
        } else if(isNaN($("#number_of_nominator").val()) || $("#number_of_nominator").val().length < 10) {
            $("#number_of_nominator").css('border-color','#F00');
            valid = false;
        }  else {
            $("#number_of_nominator").css('border-color','#999999');
        }
    </script>
</head>

<body>
<div class="main-wrapper">
    <div class="bg-left">
        <img src="images/bottom-left.png">
    </div>
    <div class="bg-top">
        <img src="images/top-right.png">
    </div>
    <div class="wrapper">
        <div class="banner">
            <img src="images/banner.jpg" class="img-fluid">
        </div>
        <div class="container">

            <a href="uploads/Nominationform.doc" style="margin-left: 55%;">Please click here to download nomination form in word doc.</a>
            <div class="new-registration-wrapper">

                <!--	<h1>New Register</h1>
                -->
                <form method="" action="" id="cio_data">
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="name_of_organization" class="col-form-label">Name of Organization</label><span class="req">*</span>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="name_of_organization" class="form-control" id="name_of_organization" placeholder="Name of Organization" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="name_of_nominator" class="col-form-label">Name of Nominator</label><span class="req">*</span>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="name_of_nominator" class="form-control" id="name_of_nominator" placeholder="Name of Nominator" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="email_of_nominator" class="col-form-label">Official email of Nominator</label><span class="req">*</span>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="email_of_nominator" class="form-control" id="email_of_nominator" placeholder="Official email of Nominator" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="number_of_nominator" class="col-form-label">Contact number of Nominator</label><span class="req">*</span>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="number_of_nominator" maxlength="10" class="form-control" id="number_of_nominator" placeholder="Contact number of Nominator" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-6">
                            <label for="it_head" class="col-form-label">Name of the CIO / IT Head</label><span class="req">*</span>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="it_head" class="form-control" id="it_head" placeholder="Name of the CIO / IT Head" required>
                        </div>
                    </div>


                    <h4>Core Strategic IT priorities to achieve Business outcomes</h4>

                    <p class="title-color"><strong>1. Datacenter Transformation</strong></p>
                    <div class="dt-wrapper">
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>a)</strong> How many datacenters do you have?</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="no_of_datacenter" class="custom-control-input" id="customRadio1" value="1" required>
                                    <label class="custom-control-label" for="customRadio1">1</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="no_of_datacenter" class="custom-control-input" id="customRadio2" value="2">
                                    <label class="custom-control-label" for="customRadio2">2</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="no_of_datacenter" class="custom-control-input" id="customRadio3" value="3-5">
                                    <label class="custom-control-label" for="customRadio3">3-5</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="no_of_datacenter" class="custom-control-input" id="customRadio4" value="5+">
                                    <label class="custom-control-label" for="customRadio4">5+</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>b)</strong> What percentage of your datacenters are virtualized?</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio5" name="datacenter_virtualized" value="< 25%" required>
                                    <label class="custom-control-label" for="customRadio5"> < 25% </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio6" name="datacenter_virtualized" value="25%- 50%">
                                    <label class="custom-control-label" for="customRadio6">25%- 50%</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio7" name="datacenter_virtualized" value="50%-90 %">
                                    <label class="custom-control-label" for="customRadio7">50%-90 %</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio8" name="datacenter_virtualized" value="100%">
                                    <label class="custom-control-label" for="customRadio8">100%</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>c)</strong> Key business critical applications that have been virtualized (e.g. SAP/Exchange/Oracle/Sharepoint/Core Banking/MS Dynamics/Hadoop/any other bespoke app that is critical to your business)</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="business_application" style="margin-top:10px;">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>d)</strong></label>
                                Do you have a Multi Hypervisor environment?</div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio9" name="multi_hypervisor_environment" onclick="showDiv('hypervisorsDiv')" value="Yes" required>
                                    <label class="custom-control-label" for="customRadio9">Yes </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio10" name="multi_hypervisor_environment" onclick="hideDiv('hypervisorsDiv')" value="No">
                                    <label class="custom-control-label" for="customRadio10">No</label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row" id="hypervisorsDiv">
                            <div class="col-sm-6">
                                <label class="col-form-label">If yes, which hypervisors do you use in your environment ?   </label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck" name="hypervisor_in_environment[]" value="vSphere">
                                    <label class="custom-control-label" for="customCheck">vSphere</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1" name="hypervisor_in_environment[]" value="Hyper-V">
                                    <label class="custom-control-label" for="customCheck1">Hyper-V</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2" name="hypervisor_in_environment[]" value="KVM">
                                    <label class="custom-control-label" for="customCheck2">KVM</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3.1" name="hypervisor_in_environment[]" value="AHV">
                                    <label class="custom-control-label" for="customCheck3.1">AHV</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3" name="hypervisor_in_environment[]" value="Others">
                                    <label class="custom-control-label" for="customCheck3">Others</label>
                                </div>
                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>e)</strong> Have you deployed Software Defined Networking/Network Virtualization solution?</label>
                            </div>

                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio9.1" name="software_defined_network" value="Yes" onclick="showDiv('solutionDiv')">
                                    <label class="custom-control-label" for="customRadio9.1">Yes </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio10.1" name="software_defined_network" value="No" onclick="hideDiv('solutionDiv')">
                                    <label class="custom-control-label" for="customRadio10.1">No</label>
                                </div>

                            </div>

                        </div>


                        <div class="form-group row" id="solutionDiv">
                            <div class="col-sm-6">
                                <label class="col-form-label">If yes, please share details on the solution  </label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="software_defined_network_text">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>f)</strong></label>
                                Have you deployed Hyper-converged Infra/ Software Defined Storage solution? </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio15" name="hyper_converged_infra" value="Yes" onclick="showDiv('hyperconvergedDiv')">
                                    <label class="custom-control-label" for="customRadio15">Yes </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio16" name="hyper_converged_infra" value="No" onclick="hideDiv('hyperconvergedDiv')">
                                    <label class="custom-control-label" for="customRadio16">No</label>
                                </div>

                            </div>
                        </div>


                        <div class="form-group row" id="hyperconvergedDiv">
                            <div class="col-sm-6">
                                <label class="col-form-label">If yes, please share details on the solution  </label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="hyper_converged_infra_text">
                            </div>
                        </div>





                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>g)</strong> Have you deployed Software Defined Storage solution? </label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio13" name="software_defined_solution" value="Yes" onclick="showDiv('softwaredefinedDiv')">
                                    <label class="custom-control-label" for="customRadio13">Yes </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio14" name="software_defined_solution" value="No" onclick="hideDiv('softwaredefinedDiv')">
                                    <label class="custom-control-label" for="customRadio14">No</label>
                                </div>

                            </div>
                        </div>


                        <div class="form-group row" id="softwaredefinedDiv">
                            <div class="col-sm-6">
                                <label class="col-form-label">If yes, please share details on the solution  </label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="software_defined_solution_text">
                            </div>
                        </div>


                    </div>


                    <p class="title-color"><strong>2.  Accelerate Multi-Cloud</strong></p>
                    <div class="dt-wrapper">


                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>a)</strong></label>
                                Do you have a multi-cloud environment?</div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioa2.1" name="multi_cloud_environment" value="Yes" onclick="showDiv('multicloudDiv')">
                                    <label class="custom-control-label" for="customRadioa2.1">Yes </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioa2.2" name="multi_cloud_environment" value="No" onclick="hideDiv('multicloudDiv')">
                                    <label class="custom-control-label" for="customRadioa2.2">No</label>
                                </div>

                            </div>
                        </div>


                        <div id="multicloudDiv">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="col-form-label">If yes, please share details </label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="multi_cloud_environment_text">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="col-form-label">If yes, what have you deployed</label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck12.1" name="multi_cloud_environment_deploy[]" value="VMC on AWS">
                                        <label class="custom-control-label" for="customCheck12.1">VMC on AWS </label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck12.2" name="multi_cloud_environment_deploy[]" value="IBM Cloud for VMware Solutions ">
                                        <label class="custom-control-label" for="customCheck12.2">IBM Cloud for VMware Solutions </label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck12.3" name="multi_cloud_environment_deploy[]" value="Azure  VMware cloud service Providers (Netmagic, Sify, Nxtgen)">
                                        <label class="custom-control-label" for="customCheck12.3"> Azure  VMware cloud service Providers (Netmagic, Sify, Nxtgen) </label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="otherdeploy" name="multi_cloud_environment_deploy[]" value="Other">
                                        <label class="custom-control-label" for="otherdeploy">Other </label>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group row" id="otherDiv" style="display: none" >
                                <div class="col-sm-6">
                                    <label class="col-form-label"></label>
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" name="other_environment_text">
                                </div>
                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>b)</strong> Which Public Cloud providers do you work with?  </label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2.1" name="public_cloud[]" value="AWS">
                                    <label class="custom-control-label" for="customCheck2.1">AWS </label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2.2" name="public_cloud[]" value="Azure">
                                    <label class="custom-control-label" for="customCheck2.2">Azure </label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2.3" name="public_cloud[]" value="IBM">
                                    <label class="custom-control-label" for="customCheck2.3"> IBM </label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2.4" name="public_cloud[]" value="VMware cloud service Providers (Netmagic, Sify, Nxtgen)">
                                    <label class="custom-control-label" for="customCheck2.4">VMware cloud service Providers (Netmagic, Sify, Nxtgen)</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>c)</strong> Applications that are deployed on Public Cloud</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customRadio17" name="application_public_cloud[]" value="Less Critical (Test/Dev)">
                                    <label class="custom-control-label" for="customRadio17"> Less Critical (Test/Dev) </label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customRadio18" name="application_public_cloud[]" value="Business Critical (Production)">
                                    <label class="custom-control-label" for="customRadio18">Business Critical (Production)</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" id="customRadio19" name="application_public_cloud[]" value="Both">
                                    <label class="custom-control-label" for="customRadio19">Both</label>
                                </div>

                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>d)</strong> Have you integrated your private and Public Cloud environments (Hybrid Cloud)</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio20"  name="hybrid_cloud" value="Yes" onclick="showDiv('hybridcloudDiv')">
                                    <label class="custom-control-label" for="customRadio20">Yes </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio21"  name="hybrid_cloud" value="No" onclick="hideDiv('hybridcloudDiv')">
                                    <label class="custom-control-label" for="customRadio21">No</label>
                                </div>

                            </div>
                        </div>


                        <div class="form-group row" id="hybridcloudDiv">
                            <div class="col-sm-6">
                                <label class="col-form-label">If yes, please share details   </label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="hybrid_cloud_text">
                            </div>
                        </div>



                    </div>


                    <p class="title-color"><strong>3. Empower Digital Workspace</strong></p>
                    <div class="dt-wrapper">

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>a)</strong> Have you implemented Desktop virtualization (VDI) for your end users</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio22" name="desktop_virtualization" value="Yes" onclick="showDiv('desktopDiv')">
                                    <label class="custom-control-label" for="customRadio22">Yes </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadio23" name="desktop_virtualization" value="No" onclick="hideDiv('desktopDiv')">
                                    <label class="custom-control-label" for="customRadio23">No</label>
                                </div>

                            </div>
                        </div>

                        <div id="desktopDiv">
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="col-form-label">If yes, what is the use-case?</label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3a3.1" name="desktop_virtualization_case[]" value="Secure access to desktops to protect IP">
                                        <label class="custom-control-label" for="customCheck3a3.1">Secure access to desktops to protect IP </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3a3.2" name="desktop_virtualization_case[]" value="Internet Separation">
                                        <label class="custom-control-label" for="customCheck3a3.2">Internet Separation </label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3a3.3" name="desktop_virtualization_case[]" value="Optimize hardware for Training / Learning & development">
                                        <label class="custom-control-label" for="customCheck3a3.3">Optimize hardware for Training / Learning & development</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3a3.4" name="desktop_virtualization_case[]" value="Borderless ODC">
                                        <label class="custom-control-label" for="customCheck3a3.4">Borderless ODC</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3a3.5" name="desktop_virtualization_case[]" value="Improve / Simplify manageability & operations">
                                        <label class="custom-control-label" for="customCheck3a3.5">Improve / Simplify manageability & operations</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3a3.6" name="desktop_virtualization_case[]" value="Application Lifecycle management">
                                        <label class="custom-control-label" for="customCheck3a3.6">Application Lifecycle management</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3a3.7" name="desktop_virtualization_case[]" value="Reduce TCO">
                                        <label class="custom-control-label" for="customCheck3a3.7">Reduce TCO</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3a3.8" name="desktop_virtualization_case[]" value="Implement BYOD">
                                        <label class="custom-control-label" for="customCheck3a3.8">Implement BYOD</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3a3.9" name="desktop_virtualization_case[]" value="Transform Branch / Remote office operations">
                                        <label class="custom-control-label" for="customCheck3a3.9">Transform Branch / Remote office operations</label>
                                        <!--<label class="custom-control-label" for="customCheck3Empower Digital Workspacea3.9">Transform Branch / Remote office operations</label>-->
                                    </div>

                                </div>

                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <label class="col-form-label">If yes, which solution do you use?</label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3.10" name="desktop_virtualization_solution[]" value="VMware">
                                        <label class="custom-control-label" for="customCheck3.10">VMware</label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3.12" name="desktop_virtualization_solution[]" value="Citrix">
                                        <label class="custom-control-label" for="customCheck3.12">Citrix  </label>
                                    </div>
                                    <div class="custom-control custom-checkbox custom-control-inline">
                                        <input type="checkbox" class="custom-control-input" id="customCheck3.14" name="desktop_virtualization_solution[]" value="Other">
                                        <label class="custom-control-label" for="customCheck3.14"> Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>b)</strong> Have you implemented Enterprise Mobility solution for your end users  </label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadiob22" name="enterprise_mobility" value="Yes" onclick="showDiv('MobilityDiv')">
                                    <label class="custom-control-label" for="customRadiob22">Yes </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadiob23" name="enterprise_mobility" value="No" onclick="hideDiv('MobilityDiv')">
                                    <label class="custom-control-label" for="customRadiob23">No</label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row" id="MobilityDiv">
                            <div class="col-sm-6">
                                <label class="col-form-label">If yes, what is the use-case?</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckb3.1" name="enterprise_mobility_case[]" value="Field Mobility Management">
                                    <label class="custom-control-label" for="customCheckb3.1">Field Mobility Management</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckb3.2" name="enterprise_mobility_case[]" value="Enabling BYO">
                                    <label class="custom-control-label" for="customCheckb3.2">Enabling BYO</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckb3.3" name="enterprise_mobility_case[]" value="Workspace Transformation">
                                    <label class="custom-control-label" for="customCheckb3.3">Workspace Transformation</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckb3.4" name="enterprise_mobility_case[]" value="Application Management">
                                    <label class="custom-control-label" for="customCheckb3.4">Application Management</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="endPoint" name="enterprise_mobility_case[]" value="Endpoint Visibility and Threat Detection">
                                    <label class="custom-control-label" for="endPoint">Endpoint Visibility and Threat Detection</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheckb3.6" name="enterprise_mobility_case[]" value="Others">
                                    <label class="custom-control-label" for="customCheckb3.6">Others</label>
                                </div>

                            </div>

                        </div>

                        <p><strong>c) </strong>Workplace transformation with Windows 10</p>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label">How many end-points are you running on Windows 10 in your environment today?</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheckbl3.10" name="window_users[]" value="less than 500">
                                    <label class="custom-control-label" for="customCheckbl3.10">less than 500 </label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheckbl3.12" name="window_users[]" value="500-1000">
                                    <label class="custom-control-label" for="customCheckbl3.12">500-1000</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheckbl3.14" name="window_users[]" value="1000-2500">
                                    <label class="custom-control-label" for="customCheckbl3.14">1000-2500</label>
                                </div>

                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheckbl3.15" name="window_users[]" value="2500-5000">
                                    <label class="custom-control-label" for="customCheckbl3.15"> 2500-5000</label>
                                </div>

                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheckbl3.16" name="window_users[]" value="More than 5000">
                                    <label class="custom-control-label" for="customCheckbl3.16"> More than 5000</label>
                                </div>

                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label">Which solution do you use for modern management of Windows 10 endpoints?</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheckbl10.1" name="modern_management[]" value="SCCM">
                                    <label class="custom-control-label" for="customCheckbl10.1">SCCM</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customCheckbl10.2" name="modern_management[]" value="VMWare Unified Endpoint Management">
                                    <label class="custom-control-label" for="customCheckbl10.2">VMWare Unified Endpoint Management</label>
                                </div>
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input type="checkbox" class="custom-control-input" id="customDivSpecial" name="modern_management[]" value="Others, please specify">
                                    <label class="custom-control-label" for="customDivSpecial">Others, please specify</label>
                                </div>



                            </div>

                        </div>
                        <div class="form-group row" id="otherDivSpecial" style="display: flex;margin-top: -16px;display: none">
                            <div class="col-sm-6">
                                <label class="col-form-label"></label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="other_management_text">
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label">What is your biggest concern around management of these endpoints?</label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="management_endpoint_text">
                            </div>
                        </div>

                    </div>


                    <p class="title-color"><strong>4. Transform Networking &amp; Security </strong></p>
                    <div class="dt-wrapper">

                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>a)</strong> What percentage of your IT spend is around Datacenter Security? </label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioA1"  name="datacenter_security_per" value="< 25%">
                                    <label class="custom-control-label" for="customRadioA1">< 25%  </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioA2"  name="datacenter_security_per" value="25%-50%">
                                    <label class="custom-control-label" for="customRadioA2">25%-50 % </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioA3"  name="datacenter_security_per" value="50% - 75%">
                                    <label class="custom-control-label" for="customRadioA3">50% - 75%</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioA4"  name="datacenter_security_per" value="75%+">
                                    <label class="custom-control-label" for="customRadioA4">75%+ </label>
                                </div>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>b)</strong> Have you had a security breach in the last 12-18 months in your Datacenter?</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadiobA1"  name="security_breach" value="Yes" onclick="showDiv('security_breachDiv')">
                                    <label class="custom-control-label" for="customRadiobA1">Yes </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadiobA2" name="security_breach" value="No" onclick="hideDiv('security_breachDiv')">
                                    <label class="custom-control-label" for="customRadiobA2">No</label>
                                </div>

                            </div>

                        </div>



                        <div class="form-group row" id="security_breachDiv">
                            <div class="col-sm-6">
                                <label class="col-form-label">If yes, please share details   </label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="security_breach_text">
                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>c)</strong>  What percentage of your Datacenter traffic is East-West as compared to North-South? </label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioC1" name="datacenter_traffic_percent" value="< 25%">
                                    <label class="custom-control-label" for="customRadioC1">< 25%  </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioC2" name="datacenter_traffic_percent" value="25%-50%">
                                    <label class="custom-control-label" for="customRadioC2">25%-50 % </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioC3" name="datacenter_traffic_percent" value="50% - 75%">
                                    <label class="custom-control-label" for="customRadioC3">50% - 75%</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioC4" name="datacenter_traffic_percent" value="75%+">
                                    <label class="custom-control-label" for="customRadioC4">75%+ </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadioC5" name="datacenter_traffic_percent" value="Not aware">
                                    <label class="custom-control-label" for="customRadioC5">Not aware </label>
                                </div>

                            </div>
                        </div>



                        <div class="form-group row">
                            <div class="col-sm-6">
                                <label class="col-form-label"><strong>d)</strong> Have you implemented “Zero Trust Security” Architecture in your Datacenter?</label>
                            </div>
                            <div class="col-sm-6">
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadiobd1" name="zero_trust_security" value="Yes" onclick="showDiv('zeroDiv')">
                                    <label class="custom-control-label" for="customRadiobd1">Yes </label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" class="custom-control-input" id="customRadiobd2" name="zero_trust_security" value="No" onclick="hideDiv('zeroDiv')">
                                    <label class="custom-control-label" for="customRadiobd2">No</label>
                                </div>

                            </div>

                        </div>


                        <div class="form-group row" id="zeroDiv">
                            <div class="col-sm-6">
                                <label class="col-form-label">If yes, please share details   </label>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="zero_trust_security_text">
                            </div>
                        </div>





                    </div>

                    <p class="title-color"><strong>5) Please share the details on IT Innovations carried out in past 12 months which has resulted in significant business benefits, exceptional experiences for your end users.</strong></p>
                    <div class="dt-wrapper">
                        Below are some of the examples:-
                        <ul class="dt-wrapper-bulate">
                            <li>Reduced provisioning time for users from 3 weeks to few hrs.</li>
                            <li>Reduced the cost of storage from $xx per TB to $yy per TB</li>
                            <li>Reliable DR solutions with RTO of under 2 hrs.</li>
                            <li>Implemented secured BYOD policy</li>
                            <li>CapEx savings by implementing Microsegmentation for improved control of Server to Server traffic inside Datacenter</li>
                            <li>OpeEx savings by automating network provisioning and reducing time to provision networks from nos. of days to nos. of hours/minutes.</li>
                            <li>Increased service availability by improving uptime for business critical applications (reducing impact of unplanned outage - $ per incident in Opex Savings)</li>
                        </ul>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="3" id="comment" name="detail_text"></textarea>
                    </div>


                    <div class="form-group row">
                        <div class="col-sm-12 text-center">
                            <input type="hidden" name="type" value="CIO_DATA">
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </div>
                    </div>
                </form>
                <p style="color: #F00; font-size: 12px;">* Compulsory Fields</p>
                <p style="font-family: Arial, Helvetica, sans-serif;  font-size: 12px; color: #999;">Disclaimer: All final award winners would be decided by VMware internal jury and the decision of the jury in the shortlisting process is final and binding on all participants and VMware will not entertain any queries on the same.</p>


            </div>
        </div>
    </div>

    <div id="page-footer" class="non-responsive-width"></div>
</div>



<script type="text/javascript" src="https://www.vmware.com/bin/vmware/template/scrapper.us.js"></script>
<script type="text/javascript" src="https://www.vmware.com/content/dam/vmwaredesigns/scraper/non-responsive.js"></script>
</body>
</html>

