@extends('website.layouts.app')
@section('content')

    <main id="content">
        <div class="mb-5 space-bottom-lg-3">
            <div class="py-3 py-lg-7">
                <h6 class="font-weight-medium font-size-7 text-center my-1">معلومات عنا</h6>
            </div>
{{--            <img class="img-fluid" src="https://placehold.it/1920x650" alt="Image-Description">--}}
            <img class="img-fluid" src="{{asset('website/img/banner/img1.jpg')}}" alt="Image-Description">
            <div class="container rtl">
                <div class="mb-lg-8">
                    <div class="col-lg-9 mx-auto">
                        <div class="bg-white mt-n10 mt-md-n13 pt-5 pt-lg-7 px-3 px-md-5 pl-xl-10 pr-xl-4">
                            <div class="mb-4 mb-lg-7 ml-xl-4">
                                <h6 class="font-weight medium font-size-10 mb-4 mb-lg-7">نبذة عن تأسيس دار السّمان</h6>
                                <p class="font-weight-medium font-italic">تأسست دار السمان في إسطنبول سنة 1440هـ - 2018م، على يد الأستاذ أحمد السّمان، وهي دار نشر تهتم بإخراج كتب التراث والدراسات الإسلامية: تحقيقاً وتأليفاً، بمستوى عالٍ من الجودة والإتقان.</p>
                                <p class="font-weight-medium font-italic">واشتهرت بنشر الجديد من الكتب والمخطوطات التي لم تنشر من قبل، أو نُشِرت ولم يُعنى بها العناية الكافية.</p>

                            </div>
                            <div class="mb-4 pb-xl-1 ml-xl-4">
                                <h6 class="font-weight-medium font-size-4 mb-4 pb-1">تنشر الدار كل ما هو متعلق بالمصادر التشريعية في اقتفاءٍ تام لمنهج السلف الكرام، وقد تميزت بالخصائص التالية:
                                </h6>
                                <ol class="list-unstyled mb-0">
                                    <li class="font-size-2 mb-3 mb-lg-1">1- إخراج كنوز التراث مبرأة عن وصمة التحريف والتصحيف، مستفيدة من التقنيات الحديثة، والأجهزة المتطورة في عالم الطباعة.</li>
                                    <li class="font-size-2 mb-3 mb-lg-1">2- اعتنت الدار بكل ما يخدم التراث الشرعي وما يتصل به فروع وآداب وثقافة.</li>
                                    <li class="font-size-2 mb-3 mb-lg-1">3- أولت الدار نشر ما لم ينشر من قبل عناية واهتمامًا عظيمًا، فكللت الجهود والنفقات؛ لإخراج هذه النفائس على صورة أنيقة، وبحلة تسر الناظرين.</li>
                                    <li class="font-size-2 mb-3 mb-lg-1">4- لم يكن اهتمام الدار بالتراث المخطوط فقط، بل تفاعلت أيضاً مع إفرازات الحضارة المعاصرة، لذا فهي تتبنّى نشر كل بحثٍ يعالج قضايا معاصرة إن كان جارياً على السنن الشرعي ومنهج الوسطية الرباني - الذي تبنته -؛ وهي أبعد ما تكون عن كل ما ينشر الكراهية أو يسعى في نشر الشذوذ من الأقوال.</li>
                                    <li class="font-size-2 mb-3 mb-lg-1">5- تسعى الدار بتوفيق الله تعالى إلى التتبع التام غالباً لمخطوطات المؤلف حتى تعثر على الأصول الصحيحة التي يطمئن أهل العلم إليها، وتصح روايتها عن مؤلفها، ثم بعد هذه المرحلة الشاقة تأتي المرحلة الثانية مرحلة التحقيق والتوثيق، فتقوم الدار بتحقيقها تحقيقاً سليماً بحيث يمكن الاعتماد عليها، وتبرأ الذمة بالنقل عنها.</li>
                                </ol>  </div>

                            <div class="ml-xl-4">
                                <p class="font-weight-medium font-italic">وختامًا: فإن إصدارات دار السمان تتواجد في أكثر من 25 دولة في العالم، وشاركت في أكثر من 30 معرضاً دولياً متخصصاً في الكتاب.</p>
                                <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fdar.alsamman%2Fvideos%2F179720279999773%2F&show_text=false&width=560&t=0" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>

                            </div>

                        </div>
                    </div>
                </div>
                <div class="mb-5 mb-lg-7">
                    <div class="d-md-flex align-items-center justify-content-between px-xl-10">
                        <div class="text-center mb-3 mb-md-0">
                            <div class="font-size-12 font-weight-medium ml-lg-2">{{$numberOfProducts}}</div>
                            <span class="font-size-4"> كتاب</span>
                        </div>
                        <div class="text-center mb-3 mb-md-0">
                            <div class="font-size-12 font-weight-medium ml-2">{{$numberOfCategories}}</div>
                            <span class="font-size-4">صنف مختلف</span>
                        </div>
                        <div class="text-center mb-3 mb-md-0">
                            <div class="font-size-12 font-weight-medium ">{{$numbOfAuthors}}</div>
                            <span class="font-size-4">كاتب</span>
                        </div>
                        <div class="text-center mb-0">
                            <div class="font-size-12 font-weight-medium ml-2">{{$numbOfSuppliers}}</div>
                            <span class="font-size-4">موزع معتمد</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
