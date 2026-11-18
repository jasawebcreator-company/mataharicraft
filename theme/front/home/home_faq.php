<?php

$faqJson = '[
    {
        "question": "What is your production capacity?",
        "answer": "Our production capacity varies depending on product type and complexity. We coordinate with a network of skilled artisans and production units, allowing us to handle both small and large-scale orders while maintaining consistency."
    },
    {
        "question": "Can you handle large volume orders?",
        "answer": "Yes, our structured production system enables us to scale output based on order requirements while ensuring consistent quality across all units."
    },
    {
        "question": "What materials do you specialize in?",
        "answer": "We work with terracotta, wood (including albesia and teak), rattan, bamboo, and other natural fibers, selected for durability and suitability for export markets."
    },
    {
        "question": "Do you support custom product development?",
        "answer": "Yes, we support custom development including design adaptation, size adjustments, and finishing options. We also assist in refining designs to ensure they are suitable for production."
    },
    {
        "question": "How do you ensure product consistency?",
        "answer": "We implement quality control at multiple stages, including material selection, production monitoring, and final inspection before packing."
    },
    {
        "question": "Do you have a quality control system?",
        "answer": "Yes, our quality control process is structured to ensure each product meets agreed specifications before shipment."
    },
    {
        "question": "Are your materials legally sourced?",
        "answer": "Yes, we are SVLK certified, ensuring legality in wood sourcing and compliance with export regulations."
    },
    {
        "question": "Do you follow ethical production practices?",
        "answer": "We work with artisan communities and home-based production units, supporting fair collaboration and sustainable production practices."
    },
    {
        "question": "Can you meet specific buyer requirements or standards?",
        "answer": "We are flexible in adapting to buyer requirements, including product specifications, packaging standards, and production adjustments."
    },
    {
        "question": "When does production start?",
        "answer": "Production begins after order confirmation and deposit payment."
    },
    {
        "question": "How long does production take?",
        "answer": "Production typically takes around 75–120 days depending on product type, quantity, and production capacity."
    },
    {
        "question": "Do you support LCL shipment?",
        "answer": "Yes, LCL shipment is available with additional charges depending on the arrangement."
    },
    {
        "question": "What shipping methods do you offer?",
        "answer": "We offer FOB, Ex Works, and air shipment depending on your requirements."
    },
    {
        "question": "Where is your shipping port?",
        "answer": "Our main shipping port is Tanjung Perak, Surabaya. Jakarta can also be arranged when needed."
    },
    {
        "question": "What is your minimum order?",
        "answer": "Minimum order value starts from USD 7,500 per shipment, with a minimum quantity per item typically starting from 100 pieces or a full container with mixed items."
    },
    {
        "question": "What are your payment terms?",
        "answer": "We require a deposit payment before production begins, with the remaining balance settled before shipment. Terms may vary depending on order type and buyer status."
    },
    {
        "question": "What payment methods do you accept?",
        "answer": "We accept telegraphic transfer (T/T) and letter of credit (L/C)."
    },
    {
        "question": "Can I request a sample?",
        "answer": "Yes, we provide samples. Sample costs and shipping fees will be discussed depending on the product and requirements."
    },
    {
        "question": "Do you accept custom product requests?",
        "answer": "Yes, we welcome custom designs and product development based on your ideas or references."
    },
    {
        "question": "Can I cancel or modify my order?",
        "answer": "Once an order has been confirmed, cancellations or quantity reductions are generally not accepted."
    },
    {
        "question": "Can you support long-term or repeat orders?",
        "answer": "Yes, our system is designed to support ongoing production, ensuring consistency and reliability for long-term partnerships."
    }
]';
$faqs = json_decode($faqJson, true);
/*
|--------------------------------------------------------------------------
| Split FAQ menjadi 2 kolom
|--------------------------------------------------------------------------
*/
$faqChunks = array_chunk(
    $faqs,
    ceil(count($faqs) / 2)
);
?>
<section class="faq-section">
    <div class="container-global">
        <!-- FAQ Header -->
        <div class="faq-header text-center">
            <span class="faq-eyebrow">
                Frequently Asked Questions
            </span>
            <h2 class="faq-title">
                Everything You Need to Know
            </h2>
            <p class="faq-description">
                Find answers to common questions about our materials,
                craftsmanship, custom designs, and production process.
            </p>
        </div>
        <!-- FAQ Content -->
        <div class="row faq-row">
            <?php foreach ($faqChunks as $columnFaqs): ?>
                <div class="col-lg-6">
                    <div class="faq-list">
                        <?php foreach ($columnFaqs as $faq): ?>
                            <div class="faq-item">
                                <button
                                    class="faq-question"
                                    type="button"
                                >
                                    <span>
                                        <?= htmlspecialchars($faq['question']) ?>
                                    </span>
                                    <span class="faq-icon">
                                        +
                                    </span>
                                </button>
                                <div class="faq-answer">
                                    <p>
                                        <?= htmlspecialchars($faq['answer']) ?>
                                    </p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<style>
/* =========================
   FAQ SECTION
========================= */
.faq-section {
    position: relative;
    width: 100%;
    background: #ffffff;
}
.faq-header {
    max-width: 850px;
    margin: 0 auto 55px;
}
.faq-eyebrow {
    display: block;
    margin-bottom: 14px;
    font-family: var(--titletext);
    font-size: 20px;
    font-weight: 500;
    font-style: italic;
    line-height: 1.2;
    color: #e8864c;
}
.faq-title {
    margin: 0;
    font-family: var(--primtext);
    font-size: clamp(42px, 4vw, 60px);
    font-weight: 500;
    line-height: 1.05;
    letter-spacing: -1.8px;
    color: #050505;
}
.faq-description {
    max-width: 700px;
    margin: 15px auto 0;
    font-family: var(--subtext);
    font-size: 17px;
    font-weight: 400;
    line-height: 1.5;
    color: #555555;
}
/* =========================
   FAQ GRID
========================= */
.faq-row {
    --bs-gutter-x: 2rem;
    --bs-gutter-y: 2rem;
}
.faq-list {
    width: 100%;
}
/* =========================
   FAQ ITEM
========================= */
.faq-item {
    width: 100%;
    border-top: 1px solid #d8d8d8;
}
.faq-item:last-child {
    border-bottom: 1px solid #d8d8d8;
}
/* =========================
   QUESTION
========================= */
.faq-question {
    position: relative;
    width: 100%;
    min-height: 70px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 20px 14px;
    border: 0;
    background: transparent;
    text-align: left;
    cursor: pointer;
    font-family: var(--subtext);
    font-size: 17px;
    font-weight: 400;
    line-height: 1.3;
    color: #333333;
}
.faq-question:hover {
    color: #111111;
}
/* =========================
   ICON
========================= */
.faq-icon {
    flex: 0 0 auto;
    margin-left: 20px;
    font-family: Arial, sans-serif;
    font-size: 27px;
    font-weight: 300;
    line-height: 1;
    color: #333333;
    transition: transform 0.3s ease;
}
/* =========================
   ANSWER
========================= */
.faq-answer {
    max-height: 0;
    overflow: hidden;
    padding: 0 14px;
    opacity: 0;
    transition:
        max-height 0.5s ease,
        opacity 0.3s ease,
        padding 0.4s ease;
}
.faq-answer p {
    margin: 0;
    font-family: var(--subtext);
    font-size: 16px;
    font-weight: 400;
    line-height: 1.7;
    color: #8a8a8a;
}
/* =========================
   ACTIVE
========================= */
.faq-item.active .faq-answer {
    max-height: 300px;
    padding: 0 14px 28px;
    opacity: 1;
}
/* =========================
   TABLET
========================= */
@media (max-width: 991px) {
    .faq-section {
        /* padding: 80px 0; */
    }
    .faq-header {
        margin-bottom: 45px;
    }
    .faq-title {
        font-size: clamp(40px, 6vw, 55px);
    }
    .faq-description {
        font-size: 15px;
    }
    .faq-row {
        --bs-gutter-x: 1.5rem;
        --bs-gutter-y: 1.5rem;
    }
    .faq-question {
        min-height: 65px;
        font-size: 15px;
    }
    .faq-answer p {
        font-size: 15px;
    }
}
/* =========================
   MOBILE
========================= */
@media (max-width: 767px) {
    .faq-section {
        /* padding: 65px 0; */
    }
    .faq-header {
        margin-bottom: 35px;
    }
    .faq-eyebrow {
        font-size: 18px;
        margin-bottom: 12px;
    }
    .faq-title {
        font-size: clamp(38px, 11vw, 52px);
        line-height: 1;
        letter-spacing: -1px;
    }
    .faq-description {
        margin-top: 14px;
        font-size: 14px;
        line-height: 1.5;
    }
    .faq-row {
        --bs-gutter-x: 0;
        --bs-gutter-y: 0;
    }
    .faq-question {
        min-height: 62px;
        padding: 18px 10px;
        font-size: 14px;
    }
    .faq-icon {
        font-size: 24px;
    }
    .faq-answer {
        padding-left: 10px;
        padding-right: 10px;
    }
    .faq-item.active .faq-answer {
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 24px;
    }
    .faq-answer p {
        font-size: 14px;
        line-height: 1.6;
    }
}
</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const faqQuestions = document.querySelectorAll('.faq-question');
    faqQuestions.forEach(function (question) {
        question.addEventListener('click', function () {
            const item = this.closest('.faq-item');
            const icon = this.querySelector('.faq-icon');
            const isActive = item.classList.contains('active');
            /* =========================
               CLOSE ALL FAQ
            ========================= */
            document.querySelectorAll('.faq-item').forEach(function (faqItem) {
                faqItem.classList.remove('active');
                const faqIcon = faqItem.querySelector('.faq-icon');
                if (faqIcon) {
                    faqIcon.textContent = '+';
                }
            });
            /* =========================
               OPEN SELECTED FAQ
            ========================= */
            if (!isActive) {
                item.classList.add('active');
                icon.textContent = '−';
            }
        });
    });
});
</script>