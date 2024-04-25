<!-- ======= Header ======= -->
@include('frontPartial.header')
<style>
    .policy-heading {
        font-size: 32px;
        color: black;
    }

    .policy-sub-heading {
        font-size: 18px;
        font-weight: bold;
        color: black;
    }
    .privacy-policy p , .privacy-policy li{
        color: black;
        font-size: 15px;
    }
</style>
<!-- End Header -->
<body class="privacy-policy">
    

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container mt-5">
        <br><br>
        <h1 class=" mt-5">{{__('Privacy And Policy')}}</h1>
        <!-- <h2>{{__('A hiring platform that helps companies to hire remote based talents efficiently and 5x faster.')}}</h2> -->
        <!-- <a href="#services" class="btn-get-started scrollto">{{__('Get Started')}}</a> -->
    </div>
</section><!-- End Hero -->

<div class="container" style="padding-top:50px;padding-bottom:50px;">
    <div class="row mt-5">
        <div class="col-md-12">
            <h1 class="policy-heading">{{__('Data Protection Policy')}}</h1>
            <h3 class="policy-sub-heading">{{__('AIM, OF THE DATA PROTECTION POLICY')}}</h3>
            <p>{{__('Hire Talents is fully committed to comply with applicable data protection laws, as we believe that ensuring data protection is the basis of trustworthy business relationships.')}}</p>
            <p>{{__('We are always working to stay compliant – encourage audits, certifications, and provide industry-standard contractual protections.')}}</p>
            <p>{{__('This Data Protection Policy ensures the level of data protection prescribed by the European Union Data Protection Regulations and provides one of the necessary framework conditions for cross-border data transmission.')}}</p>
            <p>{{__('This Data Protection Policy applies to all companies of the IT Green Solution, affiliated companies and their employees and is based on globally accepted, basic principles on data protection')}}.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="policy-sub-heading">{{__('PRINCIPLES OF PERSONAL DATA PROCESSING')}}</h3>
            <p>{{__('We have to collect and use (to process) certain types of information (Personal Data) that relates to the people (Data Subjects) who we come into contact within order to carry out our business')}}.</p>
            <p>{{__('We are confident that when processing personal data, the individual rights must be protected what means that all personal data must be collected and processed in a legal and fair manner')}}.</p>
            <p>{{__('Therefore, we presume and agree that Personal data shall be:')}}</p>
            <ol>
                <li class="mb-2">{{__('Processed lawfully, fairly and in a transparent manner in relation to the data subject (‘lawfulness, fairness and transparency’)')}}</li>
                <li class="mb-2">{{__('Pollected for specified, explicit and legitimate purposes and not further processed in a manner that is incompatible with those purposes (‘purpose limitation’)')}}</li>
                <li class="mb-2">{{__('Pdequate, relevant, and limited to what is necessary in relation to the purposes for which they are processed (‘data minimization‘).')}}</li>
                <li class="mb-2">{{__('Pccurate and, where necessary, kept up to date; every reasonable step must be taken to ensure that personal data that are inaccurate, having regard to the purposes for which they are processed, are erased, or rectified without delay (‘accuracy’).')}}</li>
                <li class="mb-2">{{__('kept in a form which permits identification of data subjects for no longer than is necessary for the purposes for which the personal data are processed (‘storage limitation’).')}}</li>
                <li class="mb-2">{{__('Processed in a manner that ensures appropriate security of the personal data, including protection against unauthorized or unlawful processing and against accidental loss, destruction, or damage, using appropriate technical or organizational measures (‘integrity and confidentiality’).')}}</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="policy-sub-heading">{{__('WHAT PERSONAL DATA MAY BE COLLECTED')}}</h3>
            <p>{{__('The following types of personal information about you may be collected:')}}</p>
            <ul>
                <li class="mb-1">{{__('name')}},</li>
                <li class="mb-1">{{__('address')}},</li>
                <li class="mb-1">{{__('phone numbers')}},</li>
                <li class="mb-1">{{__('e-mail address')}}.</li>
            </ul>
            <p>{{__('Also, when you visit our website, the web servers automatically recognize your domain name and IP address. The IP address of the site that directed you to our website, operating system version and your web browser would be disclosed too as a related information. Nevertheless, this information does not relate to you directly and could not identify your personality so it could not be treated as personal data')}}.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="policy-sub-heading">{{__('HOW DO WE KEEP PERSONAL DATA SAFE')}}</h3>
            <p>{{__('We believe that personal information must be collected and dealt with appropriately, thus there must be safeguards in place to ensure this. Although data transmission over the Internet cannot be guaranteed to be secure, we work hard to maintain physical, electronic, and procedural safeguards to protect your information in accordance with applicable data protection requirements. We use technical and organizational security measures including encryption and authentication tools to protect your personal information, against manipulation, loss, destruction, and access by third parties. Our main security measures are:')}}</p>
            <ul>
                <li class="mb-1">{{__('restricted access to your data on a “needs to know” basis')}}</li>
                <li class="mb-1">{{__('transfer of data only in encrypted form')}}</li>
                <li class="mb-1">{{__('firewalled IT systems to prohibit unauthorized access')}}</li>
                <li class="mb-1">{{__('permanently monitored access to IT systems to detect and stop any misuse.')}}
                </li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="policy-sub-heading">{{__('YOUR RIGHTS')}}</h3>
            <ul>
                <li class="mb-2">{{__('Right of Access by the Data Subject: You shall have the right to receive information from us regarding the processing of your personal data.')}}</li>
                <li class="mb-2">{{__('Right to Rectification: You shall have the right to demand that we correct your personal data which are incorrect and/or incomplete.')}}</li>
                <li class="mb-2">{{__('Right to Erasure: You shall have the right, if the requirements specified in Art. 17 of the GDPR have been met, to demand the deletion of your data. Thus, in accordance with this Art. 17, for example, you may demand the deletion of your data insofar as these data are no longer required for the purposes for which they were collected.Furthermore, you may demand the deletion of these data if we process your data based upon the consent which you have granted, and you then withdraw this consent.')}}</li>
                <li class="mb-2">{{__('Right to Restriction of Processing: You shall have the right to demand the restriction of the processing of your data if the requirements specified in Art. 18 of the GDPR have been fulfilled. This is, for example, the case if you dispute the correctness of your data. For the duration of the verification of the correctness of the data, you may demand the restriction of the processing.')}}</li>
                <li class="mb-2">{{__('Right to Object: If the processing is based upon an overriding interest or your data are used for the purposes of direct advertising, you shall have the right to object to the processing of your data.')}}</li>
                <li class="mb-1">{{__('Right to Data Portability: Insofar as the data processing is undertaken based upon a consent or a fulfilment of a contractual agreement and this is also undertaken while using an automated processing system, you shall have the right to receive your data in a structured, commonplace, and machine-readable format and to transfer these data to another data processing service provider.')}}</li>
                <li class="mb-2">{{__('Right of Revocation: If the data processing is undertaken based upon a consent, you shall have the right to withdraw your consent for the data processing, with effectiveness for the future, at any time and upon a free-of-charge basis.')}}</li>
                <li class="mb-2">{{__('Right to Complain: You shall also have the right to complain to a government supervisory authority regarding our processing of your data.')}}</li>
            </ul>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
            <p>{{__('For more information about your rights and how to exercise them we recommend visiting this perfect resource from the')}} <a href="JavaScript:Void(0);">{{__('European Commission')}}</a>, {{__('which is available in many languages.')}}</p>

        </div>

    </div>

</div>
</body>
<!-- ======= Footer ======= -->
@include('frontPartial.footer')