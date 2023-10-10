@extends('website.layouts.app')
@section('content')

    <main id="content">
        <div class="mb-5 space-bottom-lg-3">
            <div class="py-3 py-lg-7">
                <h6 class="font-weight-medium font-size-7 text-center my-1">اللّجنة العلميّة</h6>
            </div>
{{--            <img class="img-fluid" src="https://placehold.it/1920x650" alt="Image-Description">--}}
            <img class="img-fluid" src="{{asset('website/img/banner/scientific.jpg')}}" alt="Image-Description">
            <div class="container rtl">
                <div class="mb-lg-8">
                    <div class="col-lg-9 mx-auto">
                        <div class="bg-white mt-n10 mt-md-n13 pt-5 pt-lg-7 px-3 px-md-5 pl-xl-10 pr-xl-4">
                            <div class="mb-4 mb-lg-7 ml-xl-4">
                                <h6 class="font-weight medium font-size-10 mb-4 mb-lg-7">نبذة عن اللّجنة العلميّة في دار السّمان</h6>
                                <p class="font-weight-medium font-italic">دأبت دار السّمان منذ نشأتها على تحقيقِ كتبُ التراث الإسلامي و العربي خدمةً لميراث علماء عظام قضو أيامهم ولياليهم في خدمة العلم و تدوينه وسعياً لهذا الهدفِ الجليل.</p>
                                <p class="font-weight-medium font-italic">أُسستِ اللجنةُ العلميةُ وهم فريقٌ علميٌ تخصصَ فيِ تحقيق المخطوطات و إخراجها, وبنى منهجه معتمداً مبادء هذا العلم الدقيق ومشورة كبار المختصين المشتغلين به. </p>
                                <p class="font-weight-medium font-italic">يبدء العمل في أي كتاب بدراسة القيمة العلمية له ومدى الحاجة اليه، ثم دراسة المخطوطات المتوفرة عنه، ومدى صلاحيتها، متبعين في ذلك اموراً معيارية أهمها صحة النسبة للمؤلف، وزمان النسخ، وتمام المخطوط. فتنسخ أجود النسخ المعتمدة وتقابل على الباقي مع إثبات الفروق في الحاشية، ثم مرحلة الضبط بالشكل، وتكون اعتماداً على علوم النحو والصرف بحيث لاتترك مجالاً للشك أو الغموض مع شرح الكلمات الغريبة بالرجوع الى المعاجم الخاصة، ثم مرحلة تخريج الأحاديث والآثار والأشعار وعزوها الى الكتب المعتمدة في كل فن من هذه الفنون ، مع ترجمة الأعلام ترجمةً مختصرةً وافيةً بما يخدم موضوع الكتاب. ثم مرحلة الإخراج الفني وتوكل هذه المهمة الى فريقٍ متخصصٍ محترفٍ في ذلك. </p>
                                <p class="font-weight-medium font-italic">وشأن أي دارٍ تحترم قراءها، تحرص دار السمّان على مرحلة قراءة الكتاب قراءة تدقيقٍ أخير لاستدراك الهفوات، ليخرج الكتاب منقحاً منسقاً مفيداً للقارئ الكريم</p>

                            </div>
                            <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fdar.alsamman%2Fvideos%2F1043586333083338%2F&show_text=false&width=560&t=0" width="100%" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>

                        </div>
                    </div>
                </div>
                <div class="mb-5 mb-lg-7">
                    <div class="d-md-flex align-items-center justify-content-between px-xl-10">
{{--                        <div class="text-center mb-3 mb-md-0">--}}
{{--                            <div class="font-size-12 font-weight-medium ml-lg-2">{{$numberOfProducts}}</div>--}}
{{--                            <span class="font-size-4"> كتاب</span>--}}
{{--                        </div>--}}
{{--                        <div class="text-center mb-3 mb-md-0">--}}
{{--                            <div class="font-size-12 font-weight-medium ml-2">{{$numberOfCategories}}</div>--}}
{{--                            <span class="font-size-4">صنف مختلف</span>--}}
{{--                        </div>--}}
{{--                        <div class="text-center mb-3 mb-md-0">--}}
{{--                            <div class="font-size-12 font-weight-medium ">{{$numbOfAuthors}}</div>--}}
{{--                            <span class="font-size-4">كاتب</span>--}}
{{--                        </div>--}}
{{--                        <div class="text-center mb-0">--}}
{{--                            <div class="font-size-12 font-weight-medium ml-2">{{$numbOfSuppliers}}</div>--}}
{{--                            <span class="font-size-4">موزع معتمد</span>--}}
{{--                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
