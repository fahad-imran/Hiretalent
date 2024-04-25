@include('frontPartial.header')
@section('title','Services')
<style>
    .itconsulting {
        padding-bottom: 50px;
    }

    .itconsulting .row {
        margin-bottom: 30px;
    }

    @media(min-width:991px) {

        .consult-row-reverse {
            flex-direction: row-reverse;

        }

        .consult-row-reverse .cosulting-titles {
            text-align: right;
        }

        .support-img {
            width: 250px !important;
        }
    }


    .itconsulting h3,
    .itconsulting h4,
    .itconsulting p,
    .itconsulting li {
        color: black;
    }



    .consult-image {
        max-width: 400px;
       margin: auto;
       text-align: center;
    }

    .consult-row-reverse .consult-image {
        margin: auto;
    }

    @media(max-width:991px) {
        .consult-image {
            margin: auto !important;
            
        }
    }

    .consult-image img {
        width: 100%;
    }

    .cosulting-titles h3 {
        font-size: 32px;
        color: #9AC40C;
        font-weight: bold;
    }

    .cosulting-titles p {
        color: #60AD23;
        font-size: 18px;
        font-weight: bold;
    }

    .cosulting-titles {
        padding: 20px 10px;
    }

    .consult-content h3 {
        text-transform: capitalize;
    }

    .consult-content b {
        font-weight: 500;
    }

    .consult-content h4 {
        font-size: 22px;
        color: #000000;
        font-weight: bold;
    }

    .consult-content li {
        font-size: 16px;
        color: #000000;

    }

    .it-consulting-page .container {
        max-width: 1100px;
    }
</style>

<body class="it-consulting-page">
    <section id="hero" style="margin:auto;">
        <div class="hero-container mt-5" style="margin:auto;">
            {{-- <h3 style="background:transparent " class="services-title">Our IT Consulting Services</h3> --}}
            <div class="what-we-offer mt-5">
                <h1>{{__('Our IT Consulting Services')}}</h1>
                <h2 style="background:transparent;">{{__('Explore our IT consulting Services')}}</h2>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="itconsulting">
            <!-- row 1 -->
            <div class="row">
                <div class="col-md-12 cosulting-titles">
                    <h3 class="consulting-heading">{{__('Digital Transformation Consulting')}}</h3>
                    <p class="consulting-tagline">{{__('Help improve business efficiency by planning, prioritizing and guiding your digital transformation initiatives.')}}</p>
                </div>
                <div class="col-md-6 consult-image-col">
                    <div class="consult-image">
                        <img src="{{asset('assets/img/itconsulting/digital.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 consult-content-col">
                    <div class="consult-content">
                        <h4>{{__('Digital transformation areas:')}}</h4>
                        <ul>
                            <li>{{__('Digital customer experience: e-commerce, immersive digital experience, digitization of in-store experience.')}} </li>
                            <li>{{__('Digital supply chain:demand forecasting, e-procurement, inventory and multi-channel order management.')}}</li>
                            <li>{{__('Digital customer service: multi-channel service desk, remote servicing, AI-powered chatbots.')}}
                            </li>
                            <li>{{__('Industry 4.0: production optimization, preventive maintenance, digital twins, quality control.')}}</li>
                            <li>{{__('Healthcare digitization: telemedicine, remote health monitoring, digital patient engagement, medical image analysis.')}}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- row 2 -->
            <div class="row consult-row-reverse">
                <div class="col-md-12 cosulting-titles">
                    <h3 class="consulting-heading">{{__('IT Strategy Consulting')}}</h3>
                    <p class="consulting-tagline">{{__('Align your IT assets with current and anticipated business goals.')}}</p>
                </div>
                <div class="col-md-6 consult-image-col ">
                    <div class="consult-image">
                        <img src="{{asset('assets/img/itconsulting/itstrategy.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 consult-content-col ">
                    <div class="consult-content">
                        <h4>{{__('Service scope:')}}</h4>
                        <ul>
                            <li>{{__('Assessing IT governance effectiveness and the current state of your IT environment:')}} {{__('applications and IT infrastructure complexity,application integrations,databases and data warehouses, development infrastructure.')}}</li>
                            <li>{{__('Outlining a high-level IT strategy addressing business needs and aligning IT resources accordingly.')}} </li>
                            <li>{{__('Planning strategic initiatives to achieve the desired state: software development,modernization, migration, re-architecting activities.')}}</li>
                            <li>{{__('Providing investment and time estimates for each initiative.')}} </li>
                            <li>{{__('Prioritizing the initiatives based on the urgency of changes and expected investment return.')}}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- row 3 -->
            <div class="row">
                <div class="col-md-12 cosulting-titles">
                    <h3 class="consulting-heading">{{__('IT Assessment')}}</h3>
                    <p class="consulting-tagline">{{__('Find opportunities to improve the efficiency, security, compliance, and reduce the costs of your IT infrastructure.')}}</p>
                </div>
                <div class="col-md-6 consult-image-col">
                    <div class="consult-image">
                        <img src="{{asset('assets/img/itconsulting/assesment.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 consult-content-col">
                    <div class="consult-content">
                        <h4>{{__('IT components we assess:')}}</h4>
                        <ul>
                            <li>{{__('IT policies and procedures establish guidelines for the use of information technology within an organization.')}}</li>
                            <li>{{__('Server infrastructure consists of physical and virtual resources, along with hardware,software, network resources, to support the management of servers in an IT environment.')}}</li>
                            <li>{{__('A secure network infrastructure minimises downtime and ensures that productivity remains as consistent as possible, no matter what arises.')}}</li>
                            <li>{{__('Storage infrastructure typically includes all storage devices, storage servers and network elements that intersect with the rest of the overall IT technology infrastructure.')}}</li>
                            <li>{{__('Network Security protects your network and data from breaches, intrusions and other threats.')}}</li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- row 4 -->
            <div class="row consult-row-reverse">
                <div class="col-md-12 cosulting-titles">
                    <h3 class="consulting-heading">{{__('IT Operations Consulting')}}</h3>
                    <p class="consulting-tagline">{{__('To build sustainable IT capabilities able to support business plans.')}}</p>
                </div>
                <div class="col-md-6 consult-image-col">
                    <div class="consult-image">
                        <img src="{{asset('assets/img/itconsulting/consulting.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 consult-content-col">
                    <div class="consult-content">
                        <h4>{{__('Service scope:')}} </h4>
                        <ul>
                            <li>{{__('Diagnosing and troubleshooting IT operational inefficiencies (in supply chain management,procurement, manufacturing, service operations, ITSM, etc.).')}}</li>
                            <li>{{__('Analyzing current hardware, software and third-party service providers, providing comparison analysis with alternatives.')}}</li>
                            <li>{{__('Planning ways to improve the efficiency, speed and cost of your IT operations (automating processes, migrating IT infrastructure to the cloud, etc.).')}}</li>
                            <li>{{__('Setting up development infrastructure (CI/CD pipeline, issue tracking and team collaboration tools, and more).')}}</li>
                            <li>{{__('Enhancing the security of IT infrastructure.')}}</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- row 5 -->
            <div class="row">
                <div class="col-md-12 cosulting-titles">
                    <h3 class="consulting-heading">{{__('IT Project And Program Management')}}</h3>
                    <p class="consulting-tagline">{{__('Coordinate activities within one or multiple IT projects to achieve faster project workflow and quality results.')}}</p>
                </div>
                <div class="col-md-6 consult-image-col">
                    <div class="consult-image">
                        <img src="{{asset('assets/img/itconsulting/project.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 consult-content-col">
                    <div class="consult-content">
                        <h4>{{__('Service scope:')}} </h4>
                        <ul>
                            <li>{{__('This project management process generally includes four phases: initiating, planning,executing, and closing.')}}{{__('Some may also include a fifth “monitoring and controlling“ phase between the executing and closing stages')}}</li>
                            <li>{{__('The schedule determines when work elements (activities) are to be completed, milestones achieved, and when the project should be completed.')}} {{__('The budget determines how much each work element should cost, the cost of each level of the work breakdown schedule (WBS), and how much the total project should cost.')}}</li>
                            <li>{{__('Organizing and managing communication between project participants.')}}</li>
                            <li>{{__('A typical project consists of many moving parts that must work together to meet deadlines.Just one part breaking down can cause delays and financial losses.')}}</li>
                            <li>{{__('Once a project is underway, a project manager tracks progress, allocates resources, manages risks, communicates, and more.')}}</li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- row 6 -->
            <div class="row consult-row-reverse">
                <div class="col-md-12 cosulting-titles">
                    <h3 class="consulting-heading">{{__('Technology consulting')}}</h3>
                    <p class="consulting-tagline">{{__('To integrate transformative digital technologies and bring disruptive changes to your business model and processes.')}}</p>
                </div>
                <div class="col-md-6 consult-image-col">
                    <div class="consult-image">
                        <img src="{{asset('assets/img/itconsulting/itconsulting-banner.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 consult-content-col">
                    <div class="consult-content">
                        <h4>{{__('Disruptive technologies we work with:')}}</h4>
                        <ul>
                            <li>{{__('cloud computing is a range of services delivered over the internet,or “the cloud.”')}} {{__('It means using remote servers to store and access data instead of relying on local hard drives and private datacenters.')}}</li>
                            <li>{{__('cyber security can be described as the collective methods, technologies, and processes to help protect the confidentiality, integrity, and availability of computer systems, networks and data, against cyber-attacks or unauthorized access.')}}</li>
                            <li>{{__('Machine learning (ML) is a field of inquiry devoted to understanding and building methods that “learn“, that is, methods that leverage data to improve performance on some set of tasks')}}</li>
                            <!-- <li>Artificial intelligence is the simulation of human
                            intelligence processes by machines, especially computer systems. Specific applications of AI
                            include expert systems, natural language processing, speech recognition and machine vision.
                        </li> -->
                            <li>{{__('A data scientist is someone who creates programming code and combines it with statistical knowledge to create insights from data.')}}</li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- row 7 -->
            <div class="row">
                <div class="col-md-12 cosulting-titles">
                    <h3 class="consulting-heading">{{__('Application implementation')}}</h3>
                    <p class="consulting-tagline">{{__('Plan and implement business software with the best value and cost of ownership.')}} </p>
                </div>
                <div class="col-md-6 consult-image-col">
                    <div class="consult-image">
                        <img src="{{asset('assets/img/itconsulting/implementation.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 consult-content-col">
                    <div class="consult-content">
                        <h4>{{__('Service scope:')}} </h4>
                        <ul>
                            <li>{{__('Analyzing your business needs and scoping software functionality.')}} </li>
                            <li>{{__('Deciding between a platform-based and custom solution (taking into account the budget,number of users, the existing software ecosystem, and more factors).')}} </li>
                            <li>{{__('If a platform-based solution is a better choice: recommending the best-fitting platform and creating a functional specification with configuration, customization and integration details.')}} </li>
                            <li>{{__('If a custom solution is chosen: planning a resilient architecture, prototyping the solution, and defining the required project skills and roles.')}} </li>
                            <li>{{__('Raining for end users to ensure software adoption.')}} </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- row 8 -->
            <div class="row consult-row-reverse">
                <div class="col-md-12 cosulting-titles">
                    <h3 class="consulting-heading">{{__('Application modernization')}}</h3>
                    <p class="consulting-tagline">{{__('To increase business value of your existing apps.')}}</p>
                </div>
                <div class="col-md-6 consult-image-col">
                    <div class="consult-image">
                        <img src="{{asset('assets/img/itconsulting/modern.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 consult-content-col">
                    <div class="consult-content">
                        <h4>{{__('Service scope:')}} </h4>
                        <ul>
                            <li>{{__('Analyzing the cost of ownership for apps and checking for cost reduction opportunities.')}}</li>
                            <li>{{__('Migrating the apps to the cloud.')}} </li>
                            <li>{{__('Replatforming the apps.')}}</li>
                            <li>{{__('Re-architecting the apps to achieve easier scalability and flexibility.')}} </li>
                            <li>Redesigning user experience for customers and internal users. </li>
                        </ul>
                    </div>
                </div>
            </div>



            <!-- row 9 -->
            <div class="row">
                <div class="col-md-12 cosulting-titles">
                    <h3 class="consulting-heading">{{__('Application support')}}</h3>
                    <p class="consulting-tagline">{{__('Keep your business apps well-functioning and aligned with current needs.')}}</p>
                </div>
                <div class="col-md-6 consult-image-col">

                    <div class="consult-image">
                        <img class="support-img" src="{{asset('assets/img/itconsulting/support.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 consult-content-col">
                    <div class="consult-content">
                        <h4>{{__('Service scope:')}} </h4>
                        <ul>
                            <li>{{__('Updating functional capabilities of your apps in line with emerging business requirements and improving UX.')}} </li>
                            <li>{{__('Monitoring app performance.')}} </li>
                            <li>{{__('Resolving incidents and applying root cause analysis to prevent incident’s recurrence.')}} </li>
                            <li>{{__('Planning and performing application modernization activities.')}} </li>
                            <li>{{__('Auditing and patching app security.')}} </li>
                        </ul>
                    </div>
                </div>
            </div>


            <!-- row 10 -->
            <div class="row consult-row-reverse">
                <div class="col-md-12 cosulting-titles">
                    <h3 class="consulting-heading">{{__('IT infrastructure management')}}</h3>
                    <p class="consulting-tagline">{{__('To ensure stability and flexibility of your IT infrastructure.')}} </p>
                </div>
                <div class="col-md-6 consult-image-col">
                    <div class="consult-image">
                        <img src="{{asset('assets/img/itconsulting/Infrastructure.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 consult-content-col">
                    <div class="consult-content">
                        <h4>{{__('Service scope:')}} </h4>
                        <ul>
                            <li>{{__('Monitoring your servers, network, data centers, cloud services, and applications.')}} </li>
                            <li>{{__('Fast incident troubleshooting.')}} </li>
                            <li>{{__('Root cause analysis and incident prevention.')}} </li>
                            <li>{{__('Auditing the security of your IT infrastructure and patching detected vulnerabilities')}}</li>
                            <li>{{__('IT infrastructure evolution')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


@include('frontPartial.footer')