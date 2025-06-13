<div class="form-section">

    <form class="profile-form">


        <div class="row profile-form-row">
            <div class="col-md-6 form-group">
                <label class="form-label">Nom Complet <span class="text-danger fw-bold">*</span></label>
                <input type="text" id="profile_nom_complet" class="form-control" value="John Doe" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="profile_titre" class="form-label">Titre Profil CV <span style="color:red">*</span></label>
                <input type="text" id="profile_titre" class="form-control" value="Développeur Full Stack" required>
            </div>
        </div>
        <div class="row profile-form-row">
            <div class="col-md-6 form-group">
                <label for="profile_email" class="form-label">Email contact (CV) <span
                        class="text-danger fw-bold">*</span></label>
                <input type="email" id="profile_email" class="form-control" value="john.doe@example.com"
                    placeholder="Par défaut: john.doe@example.com">
            </div>
            <div class="col-md-6 form-group">
                <label for="profile_telephone" class="form-label">Téléphone (CV) <span
                        class="text-danger fw-bold">*</span></label>
                <input type="tel" id="profile_telephone" class="form-control" value="+33 6 12 34 56 78"
                    placeholder="Par défaut: +33 6 12 34 56 78">
            </div>
        </div>
        <div class="row profile-form-row">
            <div class="col-md-6 form-group">
                <label for="profile_adresse" class="form-label">Adresse / Ville <span
                        class="text-danger fw-bold">*</span></label>
                <input type="text" id="profile_adresse" class="form-control" value="123 Rue de la Paix, Paris, France">
            </div>
            <div class="col-md-6 form-group">
                <label for="profile_linkedin" class="form-label">URL LinkedIn</label>
                <input type="url" id="profile_linkedin" class="form-control" value="https://linkedin.com/in/johndoe"
                    placeholder="https://linkedin.com/in/...">
            </div>
        </div>
        <div class="row profile-form-row">
            <div class="col-md-6 form-group">
                <label for="profile_portfolio" class="form-label">URL Portfolio/Site/GitHub</label>
                <input type="url" id="profile_portfolio" class="form-control" placeholder="https://votresite.com" value="https://votresite.com">
            </div>
            <div class="col-md-6 form-group">
                <label for="profile_photo_cv" class="form-label">Photo CV (Max 2Mo)</label>
                <input type="file" id="profile_photo_cv" class="form-control"
                    accept="image/png, image/jpeg, image/jpg">
                <div style="font-size: 0.8em; color: var(--primary-color); margin-top: 5px;">Téléversement...</div>
                <div style="margin-top: 10px;">
                    <div
                        style="width: 60px; height: 60px; border-radius: 50%; background-color: #e0e0e0; display:flex; align-items:center; justify-content:center; color: #aaa;">
                        <i class="fas fa-user fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="row profile-form-row">
            <div class="col-md-6 form-group">
                <label for="profile_sit_mat" class="form-label">Situation Matrimoniale <span
                        class="text-danger fw-bold">*</span></label>
                <select id="profile_sit_mat" class="form-control" required>
                    <option value="">-- Choisir --</option>
                    <option value="Célibataire">Célibataire</option>
                    <option value="Marié(e)">Marié(e)</option>
                    <option value="Divorcé(e)">Divorcé(e)</option>
                    <option value="Veuf(ve)">Veuf(ve)</option>
                    <option value="Autre">Autre</option>
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="profile_nationalite" class="form-label">Nationalité <span
                        class="text-danger fw-bold">*</span></label>
                <input type="text" id="profile_nationalite" class="form-control" value="Beninois" required>
            </div>
        </div>
        <div class="row profile-form-row">
            <div class="col-md-6 form-group">
                <label for="profile_date_nais" class="form-label">Date de Naissance <span
                        class="text-danger fw-bold">*</span></label>
                <input type="date" id="profile_date_nais" class="form-control" value="1990-01-01" required>
            </div>
            <div class="col-md-6 form-group">
                <label for="profile_lieu_nais" class="form-label">Lieu de Naissance <span
                        class="text-danger fw-bold">*</span></label>
                <input type="text" id="profile_lieu_nais" class="form-control" value="Cotonou, Bénin" required>
            </div>
        </div>

        <div class="form-group">
            <label for="resume_profil_textarea" class="form-label">Résumé du Profil <span
                    class="text-danger fw-bold">*</span></label>
            <textarea id="resume_profil_textarea" class="form-control" rows="5" 
                placeholder="Décrivez brièvement votre objectif professionnel, vos points forts...">
                Développeur passionné avec 5 ans d'expérience dans le développement web. Expert en JavaScript, React et PHP/Laravel.
            </textarea>
        </div>

        {{-- <button type="button" class="btn btn-primary btn-sm" id="save_profile">
            <i class="fas fa-save"></i> <span>Enregistrer</span>
        </button> --}}
    </form>
</div>


<style>
    .form-section {
        margin-bottom: 2rem;
    }

    .form-section-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 0.5rem;
        margin-bottom: 1.5rem;
        padding-bottom: 0.75rem;
        border-bottom: 1px solid #dee2e6;
    }

    .form-section-header h4 {
        margin: 0;
        color: #343a40;
    }

    .add-item-btn span {
        margin-left: 0.3rem;
    }

    .formation-add-form {
        background-color: #f8f9fa;
        padding: 1.5rem;
        border: 1px solid #dee2e6;
        border-radius: 0.375rem;
    }

    .formation-grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    .formation-card {
        background-color: #fff;
        border: 1px solid #e9ecef;
        border-radius: 0.375rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        padding: 1.25rem;
        position: relative;
        display: flex;
        flex-direction: column;
        transition: box-shadow 0.2s ease-in-out;
        overflow: hidden;
    }

    .formation-card:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }

    .formation-card:hover .formation-direct-actions,
    .formation-card:focus-within .formation-direct-actions {
        opacity: 1;
    }

    .formation-card-body {
        flex-grow: 1;
        padding-right: 40px;
        word-break: break-word;
    }

    .formation-card-title {
        margin-bottom: 0.25rem;
        overflow-wrap: break-word;
    }

    .formation-card-subtitle {
        margin-bottom: 0.5rem;
        overflow-wrap: break-word;
    }

    .formation-card-dates {
        margin-bottom: 1rem;
        border-bottom: 1px dashed #dee2e6;
        padding-bottom: 0.75rem;
    }

    .formation-card-description {
        margin-top: 1rem;
        line-height: 1.5;
        white-space: pre-wrap;
        overflow-wrap: break-word;
    }

    .formation-direct-actions {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        display: flex;
        flex-direction: column;
        gap: 0.4rem;
        z-index: 5;
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
    }

    .btn-action-icon {
        background: rgba(255, 255, 255, 0.8);
        border: 1px solid #eee;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        cursor: pointer;
        line-height: 1;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    .btn-action-icon i {
        vertical-align: middle;
    }

    .formation-direct-actions .text-primary {
        color: var(--bs-primary, #0d6efd) !important;
    }

    .formation-direct-actions .text-danger {
        color: var(--bs-danger, #dc3545) !important;
    }

    .btn-action-icon:hover {
        background: rgba(240, 240, 240, 0.9);
        opacity: 1;
        box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
    }

    .form-label {
        margin-bottom: 0.25rem;
    }

    .text-danger {
        color: #dc3545 !important;
    }

    .profile-form-row .form-group {
        margin-bottom: 1rem;
    }

    @media (max-width: 767.98px) {
        .formation-grid {
            gap: 0.75rem;
        }

        .formation-card {
            padding: 1rem;
        }

        .formation-card-body {
            padding-right: 40px;
        }

        .formation-card-dates {
            margin-bottom: 0.75rem;
            padding-bottom: 0.5rem;
        }

        .form-section-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .formation-add-form .row>div {
            flex: 0 0 100% !important;
            max-width: 100%;
            margin-bottom: 1rem;
        }

        .formation-add-form {
            padding: 1.25rem;
        }

        .add-item-btn {
            width: 100%;
        }

        .mt-3.text-end {
            text-align: center !important;
        }

        .mt-3.text-end button {
            width: 100%;
            padding: 0.5rem 1rem;
        }

        .profile-form-row .form-group {
            margin-bottom: 0.75rem;
        }

        .profile-form-row {
            margin-bottom: 0.5rem;
        }

        .form-section-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }
    }

    @media (max-width: 575.98px) {
        .formation-card-body {
            padding-right: 35px;
        }

        .btn-action-icon {
            width: 28px;
            height: 28px;
        }

        .formation-add-form {
            padding: 1rem !important;
        }

        .formation-grid {
            gap: 0.5rem;
        }

        .btn-sm {
            padding: 0.3rem 0.6rem;
        }
    }

    :root {
        --primary-color: #0d6efd;
        --secondary-color: #6c757d;
        --dark-gray: #343a40;
        --primary-color-light: #6caeff;
        --bs-primary: #0d6efd;
        --bs-danger: #dc3545;
    }
</style>
