<!-- ============================================================
     COMPLIANCE & STANDARDS SECTION
     ============================================================ -->
<section class="compliance-section">
    <div class="container-global">
        <div class="compliance-grid">
            <!-- ==================================================
                 LEFT CONTENT
                 ================================================== -->
            <div class="compliance-intro">
                <div class="compliance-eyebrow">
                    COMPLIANCE &amp; STANDARDS
                </div>
                <h2 class="compliance-heading">
                    Aligned with<br>
                    <em>global trade.</em>
                </h2>
                <p class="compliance-description">
                    We understand the importance of compliance in international
                    trade and continuously align our processes with global
                    requirements — from legal sourcing of raw material to
                    ethical artisan partnerships.
                </p>
                <!-- NOTE -->
                <div class="compliance-note">
                    <span class="note-label">
                        NOTE
                    </span>
                    <p>
                        Documentation, certificates, and audit reports
                        are available on request for verified buyers.
                    </p>
                </div>
            </div>
            <!-- ==================================================
                 RIGHT CONTENT
                 ================================================== -->
            <div class="compliance-list">
                <!-- ITEM 1 -->
                <div class="compliance-item">
                    <div class="compliance-name">
                        <h3>
                            SVLK
                        </h3>
                        <span>
                            CERTIFIED LEGAL WOOD
                        </span>
                    </div>
                    <div class="compliance-detail">
                        SISTEM VERIFIKASI LEGALITAS KAYU —
                        INDONESIA'S NATIONAL LEGALITY ASSURANCE
                        SYSTEM, ENSURING ALL TIMBER IS SOURCED
                        AND PROCESSED LEGALLY AND TRACEABILITY.

                    </div>
                </div>
                <!-- ITEM 2 -->
                <div class="compliance-item">
                    <div class="compliance-name">
                        <h3>
                            FSC-aware
                        </h3>
                        <span>
                            RESPONSIBLE FORESTRY
                        </span>
                    </div>
                    <div class="compliance-detail">
                        WORKING TOWARDS FSC CHAIN-OF-CUSTODY
                        DOCUMENTATION. SUPPLIERS SELECTED FROM
                        SUSTAINABLE FORESTRY CONCESSIONS WHERE
                        AVAILABLE.
                    </div>
                </div>
                <!-- ITEM 3 -->
                <div class="compliance-item">
                    <div class="compliance-name">
                        <h3>
                            Ethical
                        </h3>
                        <span>
                            ARTISAN COLLABORATION
                        </span>
                    </div>
                    <div class="compliance-detail">
                        LONG-TERM, FAIR PARTNERSHIPS WITH ARTISAN
                        COMMUNITIES. TRANSPARENT PIECE-RATE PRICING,
                        NO CHILD LABOUR, VOLUNTARY PARTICIPATION.

                    </div>
                </div>
                <!-- ITEM 4 -->
                <div class="compliance-item">
                    <div class="compliance-name">
                        <h3>
                            CARTON BOX
                        </h3>
                        <span>
                            EXPORT PACKAGING
                        </span>
                    </div>
                    <div class="compliance-detail">
                        DURABLE CARTON BOX PACKAGING FOR INTERNATIONAL 
						SHIPMENT, DESIGNED TO PROTECT PRODUCTS 
						DURING HANDLING AND TRANSPORT.

                    </div>
                </div>
                <!-- ITEM 5 -->
                <div class="compliance-item">
                    <div class="compliance-name">
                        <h3>
                            Continuous
                        </h3>
                        <span>
                            PROCESS IMPROVEMENT
                        </span>
                    </div>
                    <div class="compliance-detail">
                        ONGOING REFINEMENT OF PRODUCTION AND
                        QUALITY SYSTEMS TO MEET EVOLVING BUYER
                        REQUIREMENTS AND MARKET REGULATIONS.

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
	/* ============================================================
   COMPLIANCE & STANDARDS
   ============================================================ */
.compliance-section {
    position: relative;
    /* padding: 110px 0; */
    background: #f5ecde;
}
/* ============================================================
   CONTAINER
   ============================================================ */
/* .compliance-section .container {
    width: 100%;
    max-width: 1500px;
    margin: 0 auto;
    padding: 0 55px;
} */

/* ============================================================
   GRID
   ============================================================ */
.compliance-grid {
    display: grid;
    grid-template-columns:
        minmax(0, 0.9fr)
        minmax(0, 1.35fr);
    column-gap: 100px;
    align-items: start;
}
/* ============================================================
   LEFT / INTRO
   ============================================================ */
.compliance-intro {
    max-width: 620px;
}
/* ============================================================
   EYEBROW
   ============================================================ */
.compliance-eyebrow {
    margin-bottom: 12px;
    font-family: var(--subtext);
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 0.7px;
    color: #4c4a46;
}
/* ============================================================
   HEADING
   ============================================================ */
.compliance-heading {
    margin: 0;
    font-family: var(--primtext);
    font-size: clamp(
        55px,
        5vw,
        78px
    );
    font-weight: 400;
    line-height: 0.92;
    letter-spacing: -2.5px;
    color: #25221f;
}
.compliance-heading em {
    font-style: italic;
    font-weight: 400;
}
/* ============================================================
   DESCRIPTION
   ============================================================ */
.compliance-description {
    max-width: 650px;
    margin: 38px 0 40px;
    font-family: var(--subtext);
    font-size: 17px;
    font-weight: 400;
    line-height: 1.8;
    color: #77736d;
}
/* ============================================================
   NOTE BOX
   ============================================================ */
.compliance-note {
    max-width: 485px;
    padding: 16px 18px 18px;
    border: 1px solid #9d9a94;
    border-radius: 8px;
}
.note-label {
    display: block;
    margin-bottom: 7px;
    font-family: var(--subtext);
    font-size: 12px;
    font-weight: 700;
    letter-spacing: 0.8px;
    color: #bd7335;
}
.compliance-note p {
    margin: 0;
    font-family: var(--subtext);
    font-size: 17px;
    font-weight: 400;
    line-height: 1.55;
    color: #57534e;
}
/* ============================================================
   RIGHT / LIST
   ============================================================ */
.compliance-list {
    width: 100%;
}
/* ============================================================
   COMPLIANCE ITEM
   ============================================================ */
.compliance-item {
    display: grid;
    grid-template-columns:
        minmax(180px, 0.7fr)
        minmax(0, 1.4fr);
    column-gap: 45px;
    align-items: start;
    padding: 0 0 25px;
    margin-bottom: 25px;
    border-bottom: 1px solid rgba(
        80,
        75,
        68,
        0.18
    );
}
/*
    Item terakhir tidak membutuhkan
    garis bawah.
*/
.compliance-item:last-child {
    margin-bottom: 0;
    border-bottom: none;
    padding-bottom: 0;
}
/* ============================================================
   COMPLIANCE NAME
   ============================================================ */
.compliance-name h3 {
    margin: 0 0 4px;
    font-family: var(--primtext);
    font-size: 27px;
    font-weight: 400;
    line-height: 1;
    color: #4a4641;
}
.compliance-name span {
    display: block;
    font-family: var(--subtext);
    font-size: 10px;
    font-weight: 700;
    letter-spacing: 0.6px;
    color: #bd7335;
}
/* ============================================================
   DETAIL
   ============================================================ */
.compliance-detail {
    padding-top: 2px;
    font-family: var(--subtext);
    font-size: 11px;
    font-weight: 600;
    line-height: 1.45;
    letter-spacing: 0.45px;
    color: #56524c;
}
/* ============================================================
   TABLET
   ============================================================ */
@media (max-width: 991px) {
    .compliance-section {
        /* padding: 85px 0; */
    }
    .compliance-section .container {
        padding: 0 35px;
    }
    .compliance-grid {
        grid-template-columns: 1fr;
        row-gap: 70px;
    }
    .compliance-intro {
        max-width: 700px;
    }
    .compliance-heading {
        font-size: clamp(
            52px,
            8vw,
            70px
        );
    }
    .compliance-description {
        max-width: 650px;
    }
}
/* ============================================================
   MOBILE
   ============================================================ */
@media (max-width: 767px) {
    .compliance-section {
        /* padding: 70px 0; */
    }
    .compliance-section .container {
        padding: 0 22px;
    }
    .compliance-grid {
        row-gap: 55px;
    }
    .compliance-eyebrow {
        font-size: 11px;
    }
    .compliance-heading {
        font-size: clamp(
            45px,
            14vw,
            62px
        );
        line-height: 0.94;
        letter-spacing: -1.5px;
    }
    .compliance-description {
        margin-top: 28px;
        margin-bottom: 30px;
        font-size: 15px;
        line-height: 1.7;
    }
    .compliance-note {
        max-width: 100%;
    }
    .compliance-note p {
        font-size: 15px;
    }
    /* ----------------------------------------
       RIGHT LIST
       ---------------------------------------- */
    .compliance-item {
        grid-template-columns: 1fr;
        row-gap: 18px;
        padding-bottom: 25px;
        margin-bottom: 25px;
    }
    .compliance-name h3 {
        font-size: 25px;
    }
    .compliance-detail {
        padding-top: 0;
        font-size: 10px;
        line-height: 1.55;
    }
}
</style>