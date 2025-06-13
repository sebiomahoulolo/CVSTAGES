<div class="form-section">
    <div class="form-section-header">
        <h4>Certifications</h4>
        <button type="button" class="add-item-btn btn btn-sm btn-primary">
            <i class="fas fa-plus"></i>
            <span>Ajouter</span>
        </button>
    </div>

    <div class="certification-add-form mt-4 p-4 border rounded shadow-sm bg-light">
        <h5 style="margin-bottom: 1.5rem; color: var(--primary-color, #007bff);">Ajouter une nouvelle certification</h5>
        <form>
            <div class="row mb-3">
                <div class="col-md form-group mb-md-0 mb-3">
                    <label for="new_cert_nom" class="form-label">Certification <span style="color:red">*</span></label>
                    <input type="text" id="new_cert_nom" class="form-control form-control-sm" required>
                </div>
                <div class="col-md form-group mb-md-0 mb-3">
                    <label for="new_cert_org" class="form-label">Organisme <span style="color:red">*</span></label>
                    <input type="text" id="new_cert_org" class="form-control form-control-sm" required>
                </div>
                <div class="col-md-auto form-group mb-0">
                    <label for="new_cert_annee" class="form-label">Année</label>
                    <input type="number" id="new_cert_annee" class="form-control form-control-sm" min="1980" max="2025" style="width: 90px;">
                </div>
            </div>
            <div class="form-group mb-3">
                <label for="new_cert_url" class="form-label">URL Validation</label>
                <input type="url" id="new_cert_url" class="form-control form-control-sm" placeholder="http://...">
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Ajouter Certification
                </button>
            </div>
        </form>
    </div>

    <div class="certifications-list mt-4">
        <div class="form-repeater-item mb-3 certification-card">
            <div class="item-actions">
                <button type="button" class="btn-action-icon edit-item-btn" title="Modifier">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn-action-icon delete-item-btn" title="Supprimer">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
            <div class="certification-card-body">
                <p class="cert-title">AWS Certified Solutions Architect</p>
                <p class="cert-org">Amazon Web Services - 2023</p>
                <p class="cert-url">
                    <a href="https://example.com/validation" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-link fa-sm"></i> Voir validation
                    </a>
                </p>
            </div>
        </div>

        <div class="form-repeater-item mb-3 certification-card">
            <div class="item-actions">
                <button type="button" class="btn-action-icon edit-item-btn" title="Modifier">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <button type="button" class="btn-action-icon delete-item-btn" title="Supprimer">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
            <div class="certification-card-body">
                <p class="cert-title">Google Cloud Professional Developer</p>
                <p class="cert-org">Google Cloud - 2022</p>
                <p class="cert-url">
                    <a href="https://example.com/validation" target="_blank" rel="noopener noreferrer">
                        <i class="fas fa-link fa-sm"></i> Voir validation
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<style>
    .form-section { margin-bottom: 2rem; }
    .form-section-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; padding-bottom: 0.75rem; border-bottom: 1px solid #dee2e6; }
    .form-section-header h4 { margin: 0; color: #343a40; }
    .add-item-btn span { margin-left: 0.3rem; }

    .certification-add-form,
    .editing-item .p-3 {
        background-color: #f8f9fa;
    }
    .form-label { font-size: 0.875rem; margin-bottom: 0.25rem; }
    .form-control-sm { font-size: 0.875rem; }
    .text-danger { color: #dc3545 !important; }

    .certifications-list {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1rem;
    }

    .form-repeater-item {
        border: 1px solid #e9ecef;
        border-radius: 0.375rem;
        position: relative;
        background-color: #fff;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        transition: box-shadow 0.2s ease-in-out;
    }
    .certification-card {
        padding: 1rem 1.25rem;
    }
    .certification-card:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }
    .certification-card:hover .item-actions,
    .certification-card:focus-within .item-actions {
        opacity: 1;
    }

    .editing-item {
        /* Pas de padding direct, le .p-3 interne le gère */
    }

    .item-actions {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        display: flex;
        flex-direction: column;
        gap: 0.4rem;
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
        z-index: 10;
    }
    .btn-action-icon {
        background: rgba(255, 255, 255, 0.7);
        border: none;
        border-radius: 50%;
        width: 28px;
        height: 28px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        padding: 0;
        cursor: pointer;
        line-height: 1;
    }
    .btn-action-icon i {
        font-size: 0.8rem;
        vertical-align: middle;
    }
    .btn-action-icon.edit-item-btn { color: var(--bs-primary, #0d6efd); }
    .btn-action-icon.delete-item-btn { color: var(--bs-danger, #dc3545); }
    .btn-action-icon:hover {
        background: rgba(230, 230, 230, 0.9);
        opacity: 1;
    }

    .certification-card-body {
        padding-right: 50px;
    }
    .cert-title { font-weight: 600; color: var(--secondary-color, #6c757d); margin-bottom: 0.2rem; }
    .cert-org { color: var(--primary-color, #0056b3); margin-bottom: 0.2rem; font-size: 0.95rem; }
    .cert-url { font-size: 0.9em; color: var(--dark-gray, #343a40); margin-bottom: 0; word-break: break-all; }
    .cert-url a { color: inherit; text-decoration: underline; }
    .cert-url a:hover { color: var(--primary-color, #0056b3); }
    .cert-url i { margin-right: 0.3em; }

    .empty-message {
        text-align: center;
        color: var(--dark-gray, #6c757d);
        padding: 1rem;
        border: 1px dashed #ced4da !important;
        border-radius: 4px;
        margin-top: 1rem;
    }

    @media (max-width: 767.98px) {
        .cert-title { font-size: 1rem; }
        .cert-org { font-size: 0.9rem; }
        .cert-url { font-size: 0.85em; }
        .form-section-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }
        .certification-add-form .row > div:not(:last-child),
        .editing-item .row > div:not(:last-child) {
            margin-bottom: 1rem;
        }
    }

    :root {
        --primary-color: #0d6efd;
        --secondary-color: #6c757d;
        --dark-gray: #343a40;
        --bs-primary: #0d6efd;
        --bs-danger: #dc3545;
    }
</style>
