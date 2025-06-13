@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-4 p-3">
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Informations Générales <span class="text-danger">*</span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @include('components.cvProfile')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Formations Academiques <span class="text-danger">*</span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @include('components.cvFormation')

                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Expériences Professionnelles <span class="text-danger">*</span>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @include('components.cvExperience')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            Compétences <span class="text-danger">*</span>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @include('components.cvCompetence')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseLoisirs" aria-expanded="false" aria-controls="collapseLoisirs">
                            Centres d'Intérêt <span class="text-danger">*</span>
                        </button>
                    </h2>
                    <div id="collapseLoisirs" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="loisir-add-form">
                                <form>
                                    <div class="form-group mb-3">
                                        <label for="new_loisir_nom" class="form-label">Intérêt</label>
                                        <input type="text" class="form-control" id="new_loisir_nom" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </form>
                            </div>
                            <div class="loisirs-list mt-4"></div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseCertifications" aria-expanded="false" aria-controls="collapseCertifications">
                            Certifications & Attestations <span class="text-danger">*</span>
                        </button>
                    </h2>
                    <div id="collapseCertifications" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="certification-add-form">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="new_cert_nom" class="form-label">Nom de la certification</label>
                                            <input type="text" class="form-control" id="new_cert_nom" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="new_cert_organisme" class="form-label">Organisme émetteur</label>
                                            <input type="text" class="form-control" id="new_cert_organisme" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="new_cert_annee" class="form-label">Année d'obtention</label>
                                            <input type="number" class="form-control" id="new_cert_annee" min="1900" max="2099" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="new_cert_url_validation" class="form-label">URL de validation</label>
                                            <input type="url" class="form-control" id="new_cert_url_validation">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </form>
                            </div>
                            <div class="certifications-list mt-4"></div>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                            Langues <span class="text-danger">*</span>
                        </button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @include('components.cvLangues')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                            Projets <span class="text-danger">*</span>
                        </button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            @include('components.cvProjets')
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseReferences" aria-expanded="false" aria-controls="collapseReferences">
                            Références <span class="text-danger">*</span>
                        </button>
                    </h2>
                    <div id="collapseReferences" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="reference-add-form">
                                <form>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="new_ref_nom" class="form-label">Nom complet</label>
                                            <input type="text" class="form-control" id="new_ref_nom" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="new_ref_poste" class="form-label">Poste</label>
                                            <input type="text" class="form-control" id="new_ref_poste" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="new_ref_entreprise" class="form-label">Entreprise</label>
                                            <input type="text" class="form-control" id="new_ref_entreprise" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="new_ref_telephone" class="form-label">Téléphone</label>
                                            <input type="tel" class="form-control" id="new_ref_telephone" required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="new_ref_email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="new_ref_email" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
                                </form>
                            </div>
                            <div class="references-list mt-4"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 p-3">
            <div class="cv-preview">
                <table class="cv-container" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td class="header-cell" colspan="2">
                            <table class="header-inner-table" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                    <td class="header-photo-cell">
                                        <div class="photo-container">
                                            <img src="https://via.placeholder.com/150" alt="Photo de profil">
                                        </div>
                                    </td>
                                    <td class="header-content-cell">
                                        <div class="header-content">
                                            <h1>John Doe</h1>
                                            <h2>Développeur Full Stack</h2>
                                            <div class="contact-info">
                                                <div class="contact-item"><i class="fas fa-phone"></i> +33 6 12 34 56 78</div>
                                                <div class="contact-item"><i class="fas fa-envelope"></i> john.doe@example.com</div>
                                                <div class="contact-item"><i class="fas fa-map-marker-alt"></i> Paris, France</div>
                                                <div class="contact-item"><i class="fab fa-linkedin"></i> linkedin.com/in/johndoe</div>
                                                <div class="contact-item"><i class="fas fa-link"></i> portfolio.johndoe.com</div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr class="content-row">
                        <td class="left-column-cell">
                            <div class="section profile-section">
                                <h3 class="section-title">PROFIL</h3>
                                <p class="profile-text">Développeur passionné avec 5 ans d'expérience dans le développement web. Expert en JavaScript, React et PHP/Laravel.</p>
                            </div>

                            <div class="section experiences-section">
                                <h3 class="section-title">EXPÉRIENCE PROFESSIONNELLE</h3>
                                {{-- <div class="experience-item">
                                    <div class="job-title">Développeur Full Stack</div>
                                    <div class="company">Tech Company | Paris</div>
                                    <div class="period"><i class="fas fa-calendar-alt"></i> 2020 - Présent</div>
                                    <p class="job-description">Développement d'applications web modernes et responsives.</p>
                                    <h4 class="achievements-title">Réalisations / Tâches :</h4>
                                    <ul class="achievements">
                                        <li>Refonte complète de l'interface utilisateur</li>
                                        <li>Optimisation des performances</li>
                                        <li>Mise en place de tests automatisés</li>
                                    </ul>
                                </div> --}}
                            </div>

                            <div class="section education-section">
                                <h3 class="section-title">FORMATION</h3>
                                {{-- <div class="education-item">
                                    <div class="degree">Master en Informatique</div>
                                    <div class="school">Université de Paris</div>
                                    <div class="period"><i class="fas fa-calendar-alt"></i> 2018 - 2020</div>
                                    <p class="item-description">Spécialisation en développement web et applications mobiles.</p>
                                </div> --}}
                            </div>

                            <div class="section projects-section">
                                <h3 class="section-title">PROJETS</h3>
                                {{-- <div class="project-item">
                                    <div class="project-name">Application de Gestion de CV</div>
                                    <div class="project-url"><i class="fas fa-link"></i> github.com/johndoe/cv-app</div>
                                    <p class="project-description">Application web pour la création et la gestion de CV professionnels.</p>
                                    <p class="technologies">Technologies: React, Node.js, MongoDB</p>
                                </div> --}}
                            </div>
                            <div class="section certifications-section">
                                <h3 class="section-title">CERTIFICATIONS & ATTESTATIONS</h3>
                                <div class="certification-card-body">
                                     <div class="certifications-list mt-4"></div>
                                    {{-- <p class="cert-title">AWS Certified Solutions Architect</p>
                                    <p class="cert-org">Amazon Web Services - 2023</p>
                                    <p class="cert-url">
                                        <a href="https://example.com/validation" target="_blank" rel="noopener noreferrer">
                                            <i class="fas fa-link fa-sm"></i> Voir validation
                                        </a>
                                    </p> --}}
                                </div>
                            </div>
                        </td>

                        <td class="right-column-cell">
                            <div class="section personal-info-section">
                                <h3 class="section-title">INFORMATIONS</h3>
                                <div class="info-item">
                                    <span class="info-label">Naissance:</span>
                                    {{-- <span class="info-value">15 Mars 1995 à Paris</span> --}}
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Nationalité:</span>
                                    {{-- <span class="info-value">Française</span> --}}
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Situation:</span>
                                    {{-- <span class="info-value">Célibataire</span> --}}
                                </div>
                            </div>

                            <div class="section skills-section">
                                <h3 class="section-title">COMPÉTENCES</h3>
                                <div class="skill-category">
                                    {{-- <div class="skill-title">Langages</div> --}}
                                    {{-- <div class="skill-item">
                                        <div class="skill-percent">
                                            <span class="skill-name">JavaScript</span>
                                            <span class="skill-level-text">90%</span>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="skill-fill" style="width: 90%;"></div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="skill-item">
                                        <div class="skill-percent">
                                            <span class="skill-name">PHP</span>
                                            <span class="skill-level-text">85%</span>
                                        </div>
                                        <div class="skill-bar">
                                            <div class="skill-fill" style="width: 85%;"></div>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>

                            <div class="section languages-section">
                                {{-- <h3 class="section-title">LANGUES</h3> --}}
                                {{-- <div class="language-item">
                                    <div class="language-name">Français</div>
                                    <span class="language-level-text">Langue maternelle</span>
                                    <div class="language-level-dots">
                                        <div class="level-dot active"></div>
                                        <div class="level-dot active"></div>
                                        <div class="level-dot active"></div>
                                        <div class="level-dot active"></div>
                                        <div class="level-dot active"></div>
                                    </div>
                                </div> --}}
                                {{-- <div class="language-item">
                                    <div class="language-name">Anglais</div>
                                    <span class="language-level-text">Courant</span>
                                    <div class="language-level-dots">
                                        <div class="level-dot active"></div>
                                        <div class="level-dot active"></div>
                                        <div class="level-dot active"></div>
                                        <div class="level-dot active"></div>
                                        <div class="level-dot"></div>
                                    </div>
                                </div> --}}
                            </div>

                            <div class="section interests-section">
                                <h3 class="section-title">CENTRES D'INTÉRÊT</h3>
                                {{-- <p class="interests">
                                    <span class="interest-item">Photographie</span>
                                    <span class="interest-item">Voyage</span>
                                    <span class="interest-item">Lecture</span>
                                </p> --}}
                            </div>
                            <div class="section references-section">
                                <h3 class="section-title">REFERENCES</h3>
                                {{-- <div class="reference-card-body">
                                    <p class="ref-name">Jean Dupont</p>
                                    <p class="ref-poste">Directeur Technique</p>
                                    <p class="ref-contact">Contact: jean.dupont@example.com</p>
                                    <p class="ref-relation">Relation: Ancien superviseur</p>
                                </div> --}}
                            </div>
                            
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <style>
        /* Styles généraux */
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'DejaVu Sans', Arial, sans-serif; }
        body { background-color: white; color: #333333; line-height: 1.4; font-size: 10pt; }
        h1, h2, h3, h4, h5, h6 { font-weight: 600; color: #2c3e50; }
        p { margin-bottom: 0.6em; }
        a { color: #005a9e; text-decoration: none; }
        ul { list-style-position: inside; padding-left: 5px; }

        /* Conteneur Principal */
        .cv-container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            border-collapse: collapse;
        }

        /* En-tête */
        .header-cell {
            background-color: #1a4a8b;
            color: white;
            padding: 15px 20px;
            border-bottom: 4px solid #005a9e;
        }

        .header-inner-table {
            width: 100%;
            border-collapse: collapse;
        }

        .header-photo-cell {
            width: 120px;
            vertical-align: middle;
            padding-right: 20px;
        }

        .header-content-cell {
            vertical-align: middle;
        }

        .photo-container {
            width: 100px;
            height: 100px;
            overflow: hidden;
            border-radius: 50%;
            border: 3px solid white;
            background-color: #e0e0e0;
        }

        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .header-content h1 {
            font-size: 20pt;
            color: white;
            margin-bottom: 4px;
        }

        .header-content h2 {
            font-size: 12pt;
            color: white;
            opacity: 0.95;
            margin-bottom: 10px;
        }

        .contact-info {
            margin-top: 8px;
        }

        .contact-item {
            margin-right: 12px;
            margin-bottom: 4px;
            display: inline-block;
            font-size: 9pt;
            color: white;
        }

        /* Colonnes */
        .left-column-cell {
            width: 63%;
            padding: 15px;
            padding-right: 12px;
            vertical-align: top;
            border-right: 1px solid #eaeaea;
        }

        .right-column-cell {
            width: 37%;
            padding: 15px;
            padding-left: 12px;
            vertical-align: top;
            background-color: #f8f9fa;
        }

        /* Sections */
        .section {
            margin-bottom: 18px;
        }

        .section-title {
            font-size: 13pt;
            color: #1a4a8b;
            padding-bottom: 6px;
            margin-bottom: 12px;
            border-bottom: 2px solid #0078d4;
        }

        /* Contenu */
        .profile-text {
            font-size: 9.5pt;
            line-height: 1.45;
            color: #444444;
            text-align: justify;
        }

        .experience-item, .education-item, .project-item {
            margin-bottom: 18px;
            position: relative;
            padding-left: 15px;
        }

        .experience-item::before, .education-item::before, .project-item::before {
            content: "•";
            position: absolute;
            left: 0;
            top: 0;
            font-size: 14pt;
            color: #0078d4;
        }

        .job-title, .degree, .project-name {
            font-size: 10.5pt;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 1px;
        }

        .company, .school, .project-url {
            font-size: 9.5pt;
            color: #005a9e;
            margin-bottom: 1px;
        }

        .period {
            font-size: 8.5pt;
            color: #555555;
            margin-bottom: 5px;
            font-style: italic;
        }

        .job-description, .item-description, .project-description {
            font-size: 9.5pt;
            color: #444444;
            margin-bottom: 6px;
            line-height: 1.4;
        }

        .technologies {
            font-size: 8.5pt;
            color: #0078d4;
            margin-top: 4px;
            font-style: italic;
        }

        /* Compétences */
        .skill-category {
            margin-bottom: 12px;
        }

        .skill-title {
            font-weight: 600;
            margin-bottom: 6px;
            color: #1a4a8b;
            font-size: 10pt;
        }

        .skill-item {
            margin-bottom: 6px;
        }

        .skill-bar {
            height: 6px;
            background-color: #e9ecef;
            border-radius: 3px;
            overflow: hidden;
            margin-top: 2px;
        }

        .skill-fill {
            height: 100%;
            background-color: #0078d4;
            border-radius: 3px;
        }

        .skill-percent {
            display: block;
            margin-bottom: 1px;
        }

        .skill-name {
            font-weight: 500;
            font-size: 9.5pt;
            display: inline-block;
            margin-right: 4px;
        }

        .skill-level-text {
            font-size: 8pt;
            color: #555555;
            display: inline-block;
        }

        /* Langues */
        .language-item {
            margin-bottom: 8px;
        }

        .language-name {
            font-weight: 500;
            font-size: 9.5pt;
            margin-bottom: 1px;
        }

        .language-level-text {
            font-size: 8.5pt;
            color: #555555;
            font-style: italic;
        }

        .language-level-dots {
            margin-top: 2px;
        }

        .level-dot {
            width: 8px;
            height: 8px;
            background-color: #e0e0e0;
            border-radius: 50%;
            margin-right: 3px;
            display: inline-block;
        }

        .level-dot.active {
            background-color: #0078d4;
        }

        /* Centres d'intérêt */
        .interests {
            line-height: 1.6;
        }

        .interest-item {
            display: inline;
            font-size: 9pt;
            color: #005a9e;
            padding: 0 4px;
            border-right: 1px solid #cccccc;
            margin-right: 4px;
        }

        .interest-item:last-child {
            border-right: none;
            margin-right: 0;
        }

        /* Informations personnelles */
        .info-item {
            margin-bottom: 6px;
            font-size: 9.5pt;
        }

        .info-label {
            font-weight: 600;
            color: #1a4a8b;
            display: inline-block;
            width: 75px;
        }

        .info-value {
            color: #444444;
        }

        /* Icônes */
        .contact-item i::before {
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            font-family: 'DejaVu Sans';
            font-weight: normal;
            width: 1.2em;
            text-align: left;
            margin-right: 5px;
            line-height: 1;
        }

        .contact-item i.fa-phone::before { content: '\260E'; }
        .contact-item i.fa-envelope::before { content: '\2709'; }
        .contact-item i.fa-map-marker-alt::before { content: '\1F4CD'; }
        .contact-item i.fab.fa-linkedin::before { content: 'L'; font-weight: bold; font-family: sans-serif; }
        .contact-item i.fa-link::before { content: '\1F517'; }
        .period i.fa-calendar-alt::before { content: '\1F4C5'; }

        /* Styles pour les actions sur les sections */
        .section-item {
            position: relative;
        }

        .section-actions {
            position: absolute;
            top: 10px;
            right: 10px;
            display: none;
            gap: 5px;
            z-index: 10;
        }

        .section-item:hover .section-actions {
            display: flex;
        }

        .section-actions button {
            background: none;
            border: none;
            padding: 5px;
            cursor: pointer;
            font-size: 14px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .section-actions .edit-btn {
            color: #0d6efd;
        }

        .section-actions .delete-btn {
            color: #dc3545;
        }

        .section-actions .edit-btn:hover {
            background-color: rgba(13, 110, 253, 0.1);
            color: #0a58ca;
        }

        .section-actions .delete-btn:hover {
            background-color: rgba(220, 53, 69, 0.1);
            color: #b02a37;
        }

        /* Styles pour les certifications */
        .certifications {
            margin-top: 20px;
        }

        .certification-item {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }

        .certification-name {
            font-weight: bold;
            color: #0d6efd;
        }

        .organization {
            color: #6c757d;
            font-size: 0.9em;
            margin: 5px 0;
        }

        .certification-item .period {
            font-size: 0.9em;
        }

        .certification-item .period a {
            color: #0d6efd;
            text-decoration: none;
        }

        .certification-item .period a:hover {
            text-decoration: underline;
        }

        /* Styles pour les références */
        .references {
            margin-top: 20px;
        }

        .reference-item {
            margin-bottom: 15px;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
        }

        .reference-name {
            font-weight: bold;
            color: #0d6efd;
        }

        .reference-position {
            color: #6c757d;
            font-size: 0.9em;
            margin: 5px 0;
        }

        .reference-company {
            font-style: italic;
            margin-bottom: 5px;
        }

        .reference-contact {
            font-size: 0.9em;
            color: #6c757d;
        }

        .reference-contact i {
            margin-right: 5px;
            color: #0d6efd;
        }
    </style>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            // Optimisation du gestionnaire de clic
            $('.profile-form').on('click', function(e) {
                e.preventDefault();
                
                // Récupération des informations du formulaire de manière optimisée
                const profileData = {
                    nom: $('#profile_nom_complet').val() || '',
                    titre: $('#profile_titre').val() || '',
                    email: $('#profile_email').val() || '',
                    telephone: $('#profile_telephone').val() || '',
                    adresse: $('#profile_adresse').val() || '',
                    linkedin: $('#profile_linkedin').val() || '',
                    portfolio: $('#profile_portfolio').val() || '',
                    situation: $('#profile_sit_mat').val() || '',
                    nationalite: $('#profile_nationalite').val() || '',
                    dateNaissance: $('#profile_date_nais').val() || '',
                    lieuNaissance: $('#profile_lieu_nais').val() || '',
                    resume: $('#resume_profil_textarea').val() || ''
                };

                console.log(profileData);
                

                // Mise à jour optimisée du CV
                requestAnimationFrame(() => {
                    // Mise à jour de l'en-tête
                    $('.header-content h1').text(profileData.nom);
                    $('.header-content h2').text(profileData.titre);
                    
                    // Mise à jour des contacts
                    const contactHtml = [];
                    if (profileData.email) contactHtml.push(`<div class="contact-item"><i class="fas fa-envelope"></i> ${profileData.email}</div>`);
                    if (profileData.telephone) contactHtml.push(`<div class="contact-item"><i class="fas fa-phone"></i> ${profileData.telephone}</div>`);
                    if (profileData.adresse) contactHtml.push(`<div class="contact-item"><i class="fas fa-map-marker-alt"></i> ${profileData.adresse}</div>`);
                    if (profileData.linkedin) contactHtml.push(`<div class="contact-item"><i class="fab fa-linkedin"></i> ${profileData.linkedin}</div>`);
                    if (profileData.portfolio) contactHtml.push(`<div class="contact-item"><i class="fas fa-link"></i> ${profileData.portfolio}</div>`);
                    $('.contact-info').html(contactHtml.join(''));

                    // Mise à jour du profil
                    $('.profile-text').text(profileData.resume);

                    // Mise à jour des informations personnelles
                    const personalInfoHtml = ['<h3 class="section-title">INFORMATIONS</h3>'];
                    if (profileData.dateNaissance && profileData.lieuNaissance) {
                        personalInfoHtml.push(`
                            <div class="info-item">
                                <span class="info-label">Naissance:</span>
                                <span class="info-value">${profileData.dateNaissance} à ${profileData.lieuNaissance}</span>
                            </div>
                        `);
                    }
                    if (profileData.nationalite) {
                        personalInfoHtml.push(`
                            <div class="info-item">
                                <span class="info-label">Nationalité:</span>
                                <span class="info-value">${profileData.nationalite}</span>
                            </div>
                        `);
                    }
                    if (profileData.situation) {
                        personalInfoHtml.push(`
                            <div class="info-item">
                                <span class="info-label">Situation:</span>
                                <span class="info-value">${profileData.situation}</span>
                            </div>
                        `);
                    }
                    $('.personal-info-section').html(personalInfoHtml.join(''));

                    // Mise à jour de la photo de manière asynchrone
                    const photoInput = $('#profile_photo_cv')[0];
                    if (photoInput.files && photoInput.files[0]) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            requestAnimationFrame(() => {
                                $('.photo-container img').attr('src', e.target.result);
                            });
                        }
                        reader.readAsDataURL(photoInput.files[0]);
                    }
                });

                // // Message de confirmation
                // setTimeout(() => {
                //     alert('Les informations ont été mises à jour avec succès !');
                // }, 100);
            });

            // Empêcher la soumission du formulaire avec la touche Entrée
            $('.profile-form input, .profile-form textarea').on('keypress', function(e) {
                if (e.which === 13) {
                    e.preventDefault();
                    return false;
                }
            });

            // Mise à jour de la photo
            $('#photo_cv').on('change', function(e) {
                const file = e.target.files[0];
                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        $('.photo-container img').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });

            // Gestion de la soumission du formulaire de formation
            $('.formation-add-form form').on('submit', function(e) {
                e.preventDefault();
                
                const formation = {
                    diplome: $('#new_form_diplome').val(),
                    etablissement: $('#new_form_etablissement').val(),
                    ville: $('#new_form_ville').val(),
                    annee_debut: $('#new_form_annee_debut').val(),
                    annee_fin: $('#new_form_annee_fin').val(),
                    description: $('#new_form_desc').val()
                };

                // Création du HTML pour la nouvelle formation avec les boutons d'action
                const formationHtml = `
                    <div class="section-item education-item">
                        <div class="section-actions">
                            <button class="edit-btn" title="Modifier">
                                <i class="fas fa-pencil-alt"></i>Modifier
                            </button>
                            <button class="delete-btn" title="Supprimer">
                                <i class="fas fa-trash"></i>Supprimer
                            </button>
                        </div>
                        <div class="degree">${formation.diplome}</div>
                        <div class="school">${formation.etablissement} ${formation.ville ? '| ' + formation.ville : ''}</div>
                        <div class="period">
                            <i class="fas fa-calendar-alt"></i> 
                            ${formation.annee_debut} ${formation.annee_fin ? '- ' + formation.annee_fin : ''}
                        </div>
                        ${formation.description ? `<p class="item-description">${formation.description}</p>` : ''}
                    </div>
                `;

                // Ajout de la formation dans la section éducation
                $('.education-section').append(formationHtml);

                // Réinitialisation du formulaire
                $(this).trigger('reset');
            });

            // Gestion des actions sur les formations
            $(document).on('click', '.education-item .delete-btn', function() {
                if (confirm('Êtes-vous sûr de vouloir supprimer cette formation ?')) {
                    $(this).closest('.education-item').remove();
                }
            });

            $(document).on('click', '.education-item .edit-btn', function() {
                const item = $(this).closest('.education-item');
                const diplome = item.find('.degree').text();
                const school = item.find('.school').text();
                const period = item.find('.period').text();
                const description = item.find('.item-description').text();

                // Remplir le formulaire avec les données
                $('#new_form_diplome').val(diplome);
                $('#new_form_etablissement').val(school.split('|')[0].trim());
                $('#new_form_ville').val(school.split('|')[1] ? school.split('|')[1].trim() : '');
                $('#new_form_description').val(description);

                // Supprimer l'ancienne formation
                item.remove();

                // Faire défiler jusqu'au formulaire
                $('.formation-add-form')[0].scrollIntoView({ behavior: 'smooth' });
            });

            // Gestion de la soumission du formulaire d'expérience
            $('.experience-add-form form').on('submit', function(e) {
                e.preventDefault();
                
                const experience = {
                    poste: $('#new_exp_poste').val(),
                    entreprise: $('#new_exp_entreprise').val(),
                    ville: $('#new_exp_ville').val(),
                    date_debut: $('#new_exp_date_debut').val(),
                    date_fin: $('#new_exp_date_fin').val(),
                    description: $('#new_exp_description').val(),
                    taches: [
                        $('#new_exp_tache_1').val(),
                        $('#new_exp_tache_2').val(),
                        $('#new_exp_tache_3').val()
                    ].filter(tache => tache)
                };

                const experienceHtml = `
                    <div class="section-item experience-item">
                        <div class="section-actions">
                            <button class="edit-btn" title="Modifier">
                                <i class="fas fa-pencil-alt"></i>Modifier
                            </button>
                            <button class="delete-btn" title="Supprimer">
                                <i class="fas fa-trash"></i>Supprimer
                            </button>
                        </div>
                        <div class="job-title">${experience.poste}</div>
                        <div class="company">${experience.entreprise} ${experience.ville ? '| ' + experience.ville : ''}</div>
                        <div class="period">
                            <i class="fas fa-calendar-alt"></i> 
                            ${experience.date_debut} ${experience.date_fin ? '- ' + experience.date_fin : ''}
                        </div>
                        ${experience.description ? `<p class="job-description">${experience.description}</p>` : ''}
                        ${experience.taches.length > 0 ? `
                            <h4 class="achievements-title">Réalisations / Tâches :</h4>
                            <ul class="achievements">
                                ${experience.taches.map(tache => `<li>${tache}</li>`).join('')}
                            </ul>
                        ` : ''}
                    </div>
                `;

                $('.experiences-section').append(experienceHtml);
                $(this).trigger('reset');
            });

            // Gestion de la soumission du formulaire de compétences
            $('.competence-add-form form').on('submit', function(e) {
                e.preventDefault();
                
                const competence = {
                    categorie: $('#new_comp_categorie').val(),
                    nom: $('#new_comp_nom').val(),
                    niveau: $('#new_comp_niveau').val()
                };

                let categoryHtml = $(`.skill-category:contains("${competence.categorie}")`);
                if (categoryHtml.length === 0) {
                    categoryHtml = $(`
                        <div class="skill-category">
                            <div class="skill-title">${competence.categorie}</div>
                        </div>
                    `);
                    $('.skills-section').append(categoryHtml);
                }

                const competenceHtml = `
                    <div class="section-item skill-item">
                        <div class="section-actions">
                            <button class="edit-btn" title="Modifier">
                                <i class="fas fa-pencil-alt"></i>Modifier
                            </button>
                            <button class="delete-btn" title="Supprimer">
                                <i class="fas fa-trash"></i>Supprimer
                            </button>
                        </div>
                        <div class="skill-percent">
                            <span class="skill-name">${competence.nom}</span>
                            <span class="skill-level-text">${competence.niveau}%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-fill" style="width: ${competence.niveau}%;"></div>
                        </div>
                    </div>
                `;

                categoryHtml.append(competenceHtml);
                $(this).trigger('reset');
            });

            // Gestion de la soumission du formulaire de langues
            $('.langue-add-form form').on('submit', function(e) {
                e.preventDefault();
                
                const langue = {
                    langue: $('#new_lang_langue').val(),
                    niveau: $('#new_lang_niveau').val(),
                    niveauPoints: Math.floor($('#new_lang_niveau').val() / 20)
                };

                const langueHtml = `
                    <div class="section-item language-item">
                        <div class="section-actions">
                            <button class="edit-btn" title="Modifier">
                                <i class="fas fa-pencil-alt"></i>Modifier
                            </button>
                            <button class="delete-btn" title="Supprimer">
                                <i class="fas fa-trash"></i>Supprimer
                            </button>
                        </div>
                        <div class="language-name">${langue.langue}</div>
                        <span class="language-level-text">${langue.niveau}</span>
                        <div class="language-level-dots">
                            ${Array(5).fill().map((_, i) => 
                                `<div class="level-dot ${i < langue.niveauPoints ? 'active' : ''}"></div>`
                            ).join('')}
                        </div>
                    </div>
                `;

                $('.languages-section').append(langueHtml);
                $(this).trigger('reset');
            });

            // Mise à jour des centres d'intérêt
            $('.loisir-add-form form').on('submit', function(e) {
                e.preventDefault();
                const loisir = $('#new_loisir_nom').val();
                
                const loisirHtml = `
                    <div class="interet-item mb-3">
                        <div class="interet-card-body">
                            <div class="item-actions">
                                <button type="button" class="edit-item-btn" title="Modifier">
                                    <i class="fas fa-pencil-alt"></i>
                                </button>
                                <button type="button" class="delete-item-btn" title="Supprimer">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                            <span class="interet-nom-display">${loisir}</span>
                        </div>
                    </div>
                `;
                
                $('.loisirs-list').append(loisirHtml);
                $(this).trigger('reset');

                // Mise à jour de l'affichage dans le CV
                if (!$('.interests-section .interests').length) {
                    $('.interests-section').append('<p class="interests"></p>');
                }
                const cvLoisirHtml = `
                    <span class="interest-item">${loisir}</span>
                `;
                $('.interests-section .interests').append(cvLoisirHtml);
            });

            // Gestionnaire pour les certifications
            $('.certification-add-form form').on('submit', function(e) {
                e.preventDefault();
                const certification = {
                    nom: $('#new_cert_nom').val(),
                    organisme: $('#new_cert_organisme').val(),
                    annee: $('#new_cert_annee').val(),
                    url: $('#new_cert_url_validation').val()
                };

                const certHtml = `
                    <div class="certification-item mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">${certification.nom}</h5>
                                <p class="mb-1">${certification.organisme} - ${certification.annee}</p>
                                ${certification.url ? `
                                    <a href="${certification.url}" target="_blank" class="text-primary">
                                        <i class="fas fa-external-link-alt"></i> Vérifier la certification
                                    </a>
                                ` : ''}
                            </div>
                            <div class="certification-actions">
                                <button class="btn btn-sm btn-outline-primary edit-certification">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger delete-certification">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `;

                $('.certifications-list').append(certHtml);
                $(this).trigger('reset');

                // Mise à jour de l'affichage dans le CV
                const cvCertHtml = `
                    <div class="certification-card-body">
                        <p class="cert-title">${certification.nom}</p>
                        <p class="cert-org">${certification.organisme} - ${certification.annee}</p>
                        ${certification.url ? `
                            <p class="cert-url">
                                <a href="${certification.url}" target="_blank" rel="noopener noreferrer">
                                    <i class="fas fa-link fa-sm"></i> Voir validation
                                </a>
                            </p>
                        ` : ''}
                    </div>
                `;
                // $('.projects-section').append(cvCertHtml);

            });

            // Gestionnaire pour les références
            $('.reference-add-form form').on('submit', function(e) {
                e.preventDefault();
                const reference = {
                    nom: $('#new_ref_nom').val(),
                    poste: $('#new_ref_poste').val(),
                    entreprise: $('#new_ref_entreprise').val(),
                    telephone: $('#new_ref_telephone').val(),
                    email: $('#new_ref_email').val()
                };

                const refHtml = `
                    <div class="reference-item mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">${reference.nom}</h5>
                                <p class="mb-1">${reference.poste} - ${reference.entreprise}</p>
                                <p class="mb-1">Tél: ${reference.telephone}</p>
                                <p class="mb-1">Email: ${reference.email}</p>
                            </div>
                            <div class="reference-actions">
                                <button class="btn btn-sm btn-outline-primary edit-reference">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger delete-reference">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `;

                $('.references-list').append(refHtml);
                $(this).trigger('reset');

                // Mise à jour de l'affichage dans le CV
                const cvRefHtml = `
                    <div class="reference-card-body">
                        <p class="ref-name">${reference.nom}</p>
                        <p class="ref-poste">${reference.poste}</p>
                        <p class="ref-contact">Contact: ${reference.email}</p>
                        <p class="ref-relation">Relation: ${reference.entreprise}</p>
                    </div>
                `;
                $('.references-section').append(cvRefHtml);
            });

            // Gestionnaires pour la suppression
            $(document).on('click', '.delete-item-btn', function() {
                const item = $(this).closest('.interet-item');
                const text = item.find('.interet-nom-display').text();
                item.remove();
                $(`.interest-item:contains('${text}')`).remove();
            });

            $(document).on('click', '.delete-certification', function() {
                const item = $(this).closest('.certification-item');
                const title = item.find('h5').text();
                item.remove();
                $(`.certification-card-body:has(.cert-title:contains('${title}'))`).remove();
            });

            $(document).on('click', '.delete-reference', function() {
                const item = $(this).closest('.reference-item');
                const name = item.find('h5').text();
                item.remove();
                $(`.reference-card-body:has(.ref-name:contains('${name}'))`).remove();
            });

            // Gestionnaires pour l'édition
            $(document).on('click', '.edit-item-btn', function() {
                const item = $(this).closest('.interet-item');
                const currentValue = item.find('.interet-nom-display').text();
                $('#new_loisir_nom').val(currentValue);
                item.remove();
                $(`.interest-item:contains('${currentValue}')`).remove();
            });

            $(document).on('click', '.edit-certification', function() {
                const item = $(this).closest('.certification-item');
                const nom = item.find('h5').text();
                const orgAnnee = item.find('p').first().text().split(' - ');
                const url = item.find('a').attr('href');

                $('#new_cert_nom').val(nom);
                $('#new_cert_organisme').val(orgAnnee[0]);
                $('#new_cert_annee').val(orgAnnee[1]);
                $('#new_cert_url_validation').val(url);
                item.remove();
                $(`.certification-card-body:has(.cert-title:contains('${nom}'))`).remove();
            });

            $(document).on('click', '.edit-reference', function() {
                const item = $(this).closest('.reference-item');
                const nom = item.find('h5').text();
                const posteEntreprise = item.find('p').first().text().split(' - ');
                const telephone = item.find('p').eq(1).text().replace('Tél: ', '');
                const email = item.find('p').eq(2).text().replace('Email: ', '');

                $('#new_ref_nom').val(nom);
                $('#new_ref_poste').val(posteEntreprise[0]);
                $('#new_ref_entreprise').val(posteEntreprise[1]);
                $('#new_ref_telephone').val(telephone);
                $('#new_ref_email').val(email);
                item.remove();
                $(`.reference-card-body:has(.ref-name:contains('${nom}'))`).remove();
            });

            // Gestionnaire pour les projets
            $('.projet-add-form form').on('submit', function(e) {
                e.preventDefault();
                const projet = {
                    nom: $('#new_proj_nom').val(),
                    description: $('#new_proj_desc').val(),
                    url: $('#new_proj_url').val(),
                    technologies: $('#new_proj_tech').val()
                };

                const projetHtml = `
                    <div class="project-item mb-3">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1">${projet.nom}</h5>
                                ${projet.url ? `
                                    <div class="project-url mb-1">
                                        <i class="fas fa-link"></i> ${projet.url}
                                    </div>
                                ` : ''}
                                ${projet.description ? `
                                    <p class="project-description mb-1">${projet.description}</p>
                                ` : ''}
                                ${projet.technologies ? `
                                    <p class="technologies mb-1">Technologies: ${projet.technologies}</p>
                                ` : ''}
                            </div>
                            <div class="project-actions">
                                <button class="btn btn-sm btn-outline-primary edit-project">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-sm btn-outline-danger delete-project">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                `;

                $('.projects-list').append(projetHtml);
                $(this).trigger('reset');

                // Mise à jour de l'affichage dans le CV
                const cvProjetHtml = `
                    <div class="project-item">
                        <div class="project-name">${projet.nom}</div>
                        ${projet.url ? `
                            <div class="project-url">
                                <i class="fas fa-link"></i> ${projet.url}
                            </div>
                        ` : ''}
                        ${projet.description ? `
                            <p class="project-description">${projet.description}</p>
                        ` : ''}
                        ${projet.technologies ? `
                            <p class="technologies">Technologies: ${projet.technologies}</p>
                        ` : ''}
                    </div>
                `;
                $('.projects-section').append(cvProjetHtml);
            });

            // Gestionnaire pour la suppression de projet
            $(document).on('click', '.delete-project', function() {
                const item = $(this).closest('.project-item');
                const title = item.find('h5').text();
                item.remove();
                $(`.project-item:has(.project-name:contains('${title}'))`).remove();
            });

            // Gestionnaire pour l'édition de projet
            $(document).on('click', '.edit-project', function() {
                const item = $(this).closest('.project-item');
                const nom = item.find('h5').text();
                const url = item.find('.project-url').text().replace('🔗 ', '');
                const description = item.find('.project-description').text();
                const technologies = item.find('.technologies').text().replace('Technologies: ', '');

                $('#new_proj_nom').val(nom);
                $('#new_proj_url').val(url);
                $('#new_proj_description').val(description);
                $('#new_proj_technologies').val(technologies);
                item.remove();
                $(`.project-item:has(.project-name:contains('${nom}'))`).remove();
            });
        });
    </script>
@endsection
