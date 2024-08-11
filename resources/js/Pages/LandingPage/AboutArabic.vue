<template>

        <section class="py-14 lg:py-24 bg-gray-50 dark:bg-gray-900 dark:text-white">
            <h1
                class="max-w-2xl mx-auto text-center font-bold text-4xl dark:text-white text-gray-900 mb-5 md:text-5xl md:leading-normal">
                من نحن..؟
            </h1>
            <p class=" mx-auto text-center text-base font-bold leading-7 dark:text-white text-gray-500 mb-9">
                .استثمر نحن فريق مخصص لمساعدة الناس في الحصول على العلاج اللازم وتقديمه بطريقة بسيطة وفعالة</p>

            <div class="mx-auto px-4 sm:px-6 lg:px-8 text-center">

                <video class=" mx-auto w-full h-[75%] rounded-lg" autoplay loop muted>
                    <source src="@/Images/MedShare (promo).mp4" type="video/mp4" />
                </video>
            </div>
        </section>

        <section class="py-14 lg:py-24 relative dark:bg-gray-900 dark:text-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-9">
                    <div class="img-box">
                        <img src="@/Images/55.jpg" alt="About Us tailwind page"
                            class="max-lg:mx-auto">
                    </div>
                    <div class="lg:pl-[100px] flex items-center">
                        <div class="data w-full">
                            <h2
                                class="font-manrope font-bold dark:text-white text-xl lg:text-5xl text-black mb-9 max-lg:text-center relative">
                               من هو ؟</h2>
                            <p class="font-normal text-md leading-8 dark:text-white text-gray-500 max-lg:text-center max-w-2xl mx-auto">
                                نود أن نعبّر عن امتناننا العميق للمهندس أحمد سلطان، المدرس المساعد في كلية جامعة برج العرب التكنولوجيه. لقد كان له دور محوري في توجيهنا وإرشادنا خلال مسار مادة تطوير الويب لهذا العام. يتمتع المهندس أحمد سلطان بخبرة واسعة في مجال تكنولوجيا المعلومات وتطوير الويب، وهو ما انعكس بشكل إيجابي على تجربتنا التعليمية.

بفضل تفانيه واجتهاده، لم يكن المهندس أحمد سلطان مجرد مدرس؛ بل كان مرشدًا وداعمًا، يسعى دائمًا لتقديم المساعدة والدعم اللازمين لطلابه. تحت إشرافه، اكتسبنا ليس فقط المهارات التقنية، بل أيضًا الفهم العميق للمفاهيم الأساسية والقدرة على تطبيقها في المشاريع العملية.

إن احترافية المهندس أحمد سلطان واهتمامه بتطوير قدراتنا كانت دائمًا واضحة، مما أضفى على دراستنا قيمة كبيرة. نعتبر أنفسنا محظوظين بالعمل تحت إشرافه، ونقدر كل الجهود التي بذلها لضمان نجاحنا وتفوقنا في هذا المجال.




                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-14 lg:py-24 relative dark:bg-gray-900 dark:text-white">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 relative ">
                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-9 ">
                    <div class="img-box ">
                        <img src="@/Images/About.jpg" alt="About medShare"
                            class="hidden lg:block ">
                    </div>
                    <div class="lg:pr-24 flex items-center">
                        <div class="data w-full">
                            <img src="@/Images/About.jpg" alt="About medShare"
                                class="block lg:hidden mb-9 mx-auto">
                            <h2 class="font-manrope font-bold text-xl lg:text-5xl dark:text-white text-black mb-9 max-lg:text-center text-right">
                                فريق يسعى لتغيير حياة الآخرين بأدوية غير مستخدمة
                                </h2>
                             <p class="font-normal text-md leading-8 text-gray-500 dark:text-white max-lg:text-center max-w-2xl mx-auto text-right">

                                نحن فريق من طلاب جامعة برج العرب التكنولوجية، ملتزمون بنشر الوعي بأهمية استغلال الأدوية غير المستخدمة بدلاً من التخلص منها. لقد صممنا هذا المشروع لتحقيق هدفنا المتمثل في مساعدة المحتاجين وتحسين الصحة العامة، ونسعى لبناء مجتمع قائم على الاستدامة والتضامن الاجتماعي.                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

</template>

<script setup>
import ArabicLayout from "@/Layouts/ArabicLayout.vue";
defineOptions({ layout: ArabicLayout });
</script>
