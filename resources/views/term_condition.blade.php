<!-- ======= Header ======= -->
@include('frontPartial.header')
<style>
    .term-condition-heading {
        font-size: 32px;
        color: black;
    }

    .term-condition-title {
        font-size: 24px;
        color: black;
    }

    .term-condition-description , .termscondition p {
        font-size: 15px;
        color: black;
    }
</style>
<!-- End Header -->
<body class="termscondition">
    

<!-- ======= Hero Section ======= -->
<section id="hero">
    <div class="hero-container mt-5">
        <br><br>
        <h1 class=" mt-5">{{__('Terms And Conditions')}}</h1>
        <!-- <h2>{{__('A hiring platform that helps companies to hire remote based talents efficiently and 5x faster.')}}</h2> -->
        <!-- <a href="#services" class="btn-get-started scrollto">{{__('Get Started')}}</a> -->
    </div>
</section><!-- End Hero -->
<div class="container" style="padding-top: 50px;padding-bottom:50px;">
    <div class="row">
        <div class="col-md-12">
            <h1 class="term-condition-heading">{{__('Terms & conditions')}}</h1>
            <p>{{__('In using this website, you are deemed to have read and agreed to the following terms and conditions as well as our privacy policy:')}}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="term-condition-title">{{__('UNDERSTANDING AND DEFINING SCOPE OF WORK')}}</h3>
            <p class="term-condition-description">
               {{__(' Clarity and transparency in the technical development scope is what we always request and work hard to achieve.')}} {{__('For promising projects, we do not mind having multiple sessions through Microsoft Teams, video or email to get a complete picture of the work we are supposed to do.')}} {{__('The more information we have from you it\'s better to get projects executed successfully.')}} {{__('Ideally, we need designs for all pages and technical specifications of functionality customization.')}} {{__('We will present our understanding to you once we have sufficient understanding of the project.')}} {{__('Please note that anything outside the presented statement of work will be considered as Change Request as per our terms and conditions.')}} We will strictly follow the list of tasks as agreed. We are purely focussed on technical website development. We do not consider front end concept design in our scope of work. {{__('We can convert PSD design file to HTML or e-commerce or CMS website theme but would need completely well described PSD files.')}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="term-condition-title">{{__('DEVELOPMENT ENVIRONMENT')}} </h3>
            <p class="term-condition-description">
                {{__('All the development will take place on staging server set up by Hire Talent or at customer server. We will update client based on the milestones set up. This will be done by sharing link to our dev server. Please provide feedback only when requested by our team. If client points or lists out issues during development even though our team is still working, those points are likely to be not addressed or if we are pressurized to work on them it will be considered as Change Request and charged extra. We request clients to co-operate and do review once we finish all the work including testing.')}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="term-condition-title">{{__('STRICT ADHERENCE TO SCOPE OF WORK')}} </h3>
            <p class="term-condition-description">
                {{__('Our resources will strictly follow the scope of work mutually agreed between us and client. Please note that any changes in designs or functionality would need to be clarified upfront. We will not be in position to work on any small or big issues with assumptions. Clients are requested to not to pressurize team to get task or work done on the basis that particular functionality or change needs to be understood. We request clients to clarify complete scope of work with 100% clarity in designs and functional specification.')}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="term-condition-title">{{__('PROJECT CONFIDENTIALITY AND NON-DISCLOSURE AGREEMENT')}} </h3>
            <p class="term-condition-description">
                {{__('Hire Talent takes full responsibility of keeping all client information including contact details and project information very much confidential. Our client keeps complete ownership of the project we work for them. We will not be contacting any of the end customers without permission from our client.')}}
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="term-condition-title">{{__('QUALITY CONTROL AND SUPPORT FOR BUG FIXING')}}</h3>
            <p class="term-condition-description">Our team has a dedicated QA for functionality testing and design matching. This will depend on the scope of work. We generally check in Microsoft Edge+, Google Chrome, Firefox and Safari. If you need testing to be done in specific devise or version, it needs to be discussed upfront. Otherwise, it will be considered as change request and payment will be charged on actual time taken basis as per our hourly rate. It will be responsibility of Hire Talent team to fix any issues or bugs within the scope of work and we will try to address this at earliest. </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="term-condition-title">{{__('COMMUNICATION AND RESPONSE TIME')}} </h3>
            <p class="term-condition-description">{{__('Our team normally prefers to communicate any project related discussion through email or MS Teams. Generally, there will be a dedicated project manager looking after the production of project and doing all communication. We request clients to let us know in advance if you want to set up project discussion meeting rather than chatting on MS Teams at any point of time. This ensures that we are fully prepared to discuss with you dedicatedly as there are lots of other project we have in production. We would respond to any emails or MS Teams request at earliest possible normally within 1 day. Delivery of the task will depend on team availability. We will let you know when you can expect project or task delivery. If our team has any queries related to project, we request clients to reply to us at earliest. If there are delays in this, it will affect delivery timeline.')}} </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h3 class="term-condition-title">{{__('TIMELINE AND DELAYS')}}</h3>
            <p class="term-condition-description">{{__('We would let our clients know in advance realistic timeline for development. We would avoid falling into conflict of agreeing on quicker unrealistic timeline if our team is not confident within the time frame you anticipate tasks or projects to be completed. Our commitment to deliver on agreed timeline will only be valid if we get all requested information, payments and feedback on time. Delay in any project related information or payments will cause delay in project execution. We may also transfer our resources on other project which may affect attending your project requests on urgent basis')}}.</p>
        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-12">
            <h3 class="term-condition-title">{{__('PAYMENT TERMS')}}</h3>
            <p class="term-condition-description">{{__('All our projects require advance payment before we start development.')}} {{__('The amount of advance payment is informed to client and is based on the size of project.')}} {{__('For those projects where payments are split into more that 2 halves, we would need payments to be cleared at each milestone as agreed.')}} {{__('Violation of this by client will lead to ceasing of further project progress by our team and cause unnecessary delay until we have payments cleared on time as agreed.')}}
                {{__('As per agreed payment terms, our clients will be required to make payments on time in order to start, continue or complete development.')}} {{__('Clients are requested to ensure that we receive funds in our accounts on time as per the agreement.')}} {{__('Delay in making payments may result in delay in project delivery, project getting put on hold or complete stop of work until funds are cleared.')}} {{__('Our team will not transfer any code without mutual agreement and receipt of payments.')}} {{__('If development is requested on client server, we would need 100% upfront payments. We will not tolerate urgency to transfer the code without us receiving payments')}}.</p>
        </div>

    </div>
</div>

<!-- <div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <h1 class="term-condition-heading">Terms & conditions</h1>
            <p>In using this website, you are deemed to have read and agreed to the following terms and conditions as well as our privacy policy:</p>
            <ul>
                <li class="mb-4">The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and any or all Agreements: “Client”, “You” and “““Your” refers to you, the person accessing this website and accepting the Company’s terms and conditions. “The Company”, “Hire Talents”, “Hire Talents”, “Ourselves”, “We” and “Us”, refers to Hire Talents a company registered in Ireland.</li>
                <li>“Party”, “Parties”, or “Us”, refers to both the Client and we, or either the Client or ourselves. All terms refer to the offer, acceptance, and consideration of payment necessary to undertake the process of our assistance to the Client in the most appropriate manner, whether by formal meetings of a fixed duration, or any other means, for the express purpose of meeting the Client’s needs in respect of provision of the Company’s stated services/products, in accordance with and subject to, prevailing English Law. Any use of the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable and therefore as referring to same.</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Terms of use</h3>
                <p>The usage of this website is subject to the following terms of use:</p>
                <ul>
                    <li class="mb-3">The content of our website’s pages is for your general information and promotional use only. It is subject to change without notice.</li>
                    <li class="mb-3">Your use of any information or materials on this website is entirely at your own risk, for which we shall not be liable. It’s your own responsibility to ensure that any products, services, or information available through this website meet your specific requirements.</li>
                    <li class="mb-3">This website contains material which is owned by or licensed to us. This material includes, but is not limited to, the design, layout, look, appearance, and graphics. Reproduction is prohibited other than in accordance with the relevant copyright.</li>
                    <li class="mb-3">You must seek our written permission to use any material or content from our website. Unauthorized use of this website may give rise to a claim for damages and/or be a criminal offence.</li>
                </ul>
                <p>From time to time, this website may also include links to other websites. These links are provided for your convenience to provide further information. They do not signify that we endorse the website(s). We have no responsibility for the content of the linked website(s) unless they are operated by us</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Disclaimer & limitations</h3>
                <p>The information on this website is provided on an “as is” basis. To the fullest extent permitted by law, we exclude all representations and warranties relating to this website and its contents or which is or may be provided by any affiliates or any other third party, including in relation to any inaccuracies or omissions in this website and/or any of our other literature; and exclude all liability for damages arising out of or in connection with your use of this website. This includes, without limitation, direct loss, loss of business or profits (whether the loss of such profits was foreseeable, arose in the normal course of things or you have advised this Company of the possibility of such potential loss), damage caused to your computer, computer software, systems and programs and the data thereon or any other direct or indirect, consequential and incidental damages. This Company does not however exclude liability for death or personal injury caused by its direct negligence. The above exclusions and limitations apply only to the extent permitted by law. None of your statutory rights as a consumer are affected.</p>
                <p>Any offer or acceptance contained within or implied by this website is made subject to contract and all contents are Without Prejudice.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Cookies</h3>
                <p>Like most interactive web sites this website uses cookies to enable us to retrieve user details for each visit. Cookies are used in some areas of our site to enable the functionality of this area and ease of use for those people visiting. Some of our affiliate partners may also use cookies. By using our website, you agree to have cookies added to your browser software by us or our partners.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <h3>Links from this website</h3>
                <p>We do not monitor or review the content of other websites which are linked to from this website. Opinions expressed or material appearing on such websites are not necessarily shared or endorsed by us and should not be regarded as the publisher of such opinions or material.</p>
                <p>We are not responsible for the privacy practices, or content, of these sites. We encourage our users to be aware when they leave our site & to read the privacy statements of these sites. You should evaluate the security and trustworthiness of any other site connected to this site or accessed through this site yourself, before disclosing any personal information to them. We will not accept any responsibility for any loss or damage in whatever manner, howsoever caused, resulting from your disclosure to third parties of personal information.</p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-12">
                <h3>Changes to these terms</h3>
                <p>The Company reserves the right to change these conditions from time to time as it sees fit and your continued use of the site will signify your acceptance of any adjustment to these terms. You are responsible for checking our terms and conditions before each session of using our website.</p>

            </div>

        </div>

    </div>

</div> -->
</body>

<!-- ======= Footer ======= -->
@include('frontPartial.footer')