<div class="form-section">
    <div class="form-section-header">
        <h4>Projets Personnels</h4>
        <button type="button" class="add-item-btn btn btn-sm btn-primary">
            <i class="fas fa-plus"></i>
            <span>Ajouter</span>
        </button>
    </div>

    <div class="projet-add-form mt-4 p-4 border rounded shadow-sm bg-light">
        <!-- <h5 style="margin-bottom: 1.5rem; color: var(--primary-color, #007bff);">Ajouter un nouveau projet</h5> -->
        <form>
            <div class="row mb-3">
                <div class="col-md-6 form-group">
                    <label for="new_proj_nom" class="form-label">Nom Projet <span style="color:red">*</span></label>
                    <input type="text" id="new_proj_nom" class="form-control form-control-sm" required>
                </div>
                <div class="col-md-6 form-group">
                    <label for="new_proj_url" class="form-label">URL Projet</label>
                    <input type="url" id="new_proj_url" class="form-control form-control-sm" placeholder="http://...">
                </div>
            </div>

            <div class="form-group mb-3">
                <label for="new_proj_desc" class="form-label">Description</label>
                <textarea id="new_proj_desc" class="form-control form-control-sm" rows="4" maxlength="1000"></textarea>
            </div>

            <div class="form-group mb-3">
                <label for="new_proj_tech" class="form-label">Technologies utilisées</label>
                <input type="text" id="new_proj_tech" class="form-control form-control-sm" placeholder="Ex: Laravel, Vue.js, MySQL">
            </div>
            <div class="mt-3 text-end">
                <button type="submit" class="btn btn-primary btn-sm">
                    <i class="fas fa-plus"></i> Ajouter Projet
                </button>
            </div>
        </form>
    </div>

    <div class="projets-list mt-4">
        <div class="form-repeater-item mb-3 projet-card">
            <div class="item-actions">
                <button type="button" class="edit-item-btn" title="Modifier" style="color:var(--bs-primary, #0d6efd); font-size: 1rem;">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <button type="button" class="delete-item-btn" title="Supprimer" style="color: var(--bs-danger, #dc3545); font-size: 1rem;">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
            <p class="projet-title">Application de Gestion de CV</p>
            <p class="projet-url">
                <a href="https://github.com/example/cv-app" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-link fa-sm"></i> github.com/example/cv-app
                </a>
            </p>
            <div class="projet-description">
                Une application web permettant de créer et gérer des CV professionnels avec différentes sections et templates.
            </div>
            <p class="projet-tech">Tech: Laravel, Vue.js, MySQL, Tailwind CSS</p>
        </div>

        <div class="form-repeater-item mb-3 projet-card">
            <div class="item-actions">
                <button type="button" class="edit-item-btn" title="Modifier" style="color:var(--bs-primary, #0d6efd); font-size: 1rem;">
                    <i class="fas fa-pencil-alt"></i>
                </button>
                <button type="button" class="delete-item-btn" title="Supprimer" style="color: var(--bs-danger, #dc3545); font-size: 1rem;">
                    <i class="fas fa-trash"></i>
                </button>
            </div>
            <p class="projet-title">Plateforme E-commerce</p>
            <p class="projet-url">
                <a href="https://example.com/shop" target="_blank" rel="noopener noreferrer">
                    <i class="fas fa-link fa-sm"></i> example.com/shop
                </a>
            </p>
            <div class="projet-description">
                Une plateforme e-commerce complète avec gestion des produits, panier, paiement et suivi des commandes.
            </div>
            <p class="projet-tech">Tech: React, Node.js, MongoDB, Stripe</p>
        </div>
    </div>
</div>

<style>
    .form-section { margin-bottom: 2rem; }
    .form-section-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; padding-bottom: 0.75rem; border-bottom: 1px solid #dee2e6; }
    .form-section-header h4 { margin: 0; color: #343a40; }
    .add-item-btn span { margin-left: 0.3rem; }

    .projet-add-form {
        /* Styles de base déjà ok (padding, border, bg...) */
    }

    .projets-list {
        /* Pas de grille spécifique, chaque item prendra la largeur */
    }

    .form-repeater-item {
        padding: 1rem 1.25rem;
        border: 1px solid #e9ecef;
        border-radius: 0.375rem;
        position: relative;
        background-color: #fff;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        transition: box-shadow 0.2s ease-in-out;
    }
    .form-repeater-item:not(:last-child) {
        margin-bottom: 1rem;
    }
    .projet-card:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
    }

    .editing-item .p-3 {
        background-color: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 4px;
        box-shadow: none;
    }

    .item-actions {
        position: absolute;
        top: 0.5rem;
        right: 0.5rem;
        display: flex;
        gap: 0.5rem;
        opacity: 0;
        transition: opacity 0.2s ease-in-out;
        z-index: 10;
        background-color: rgba(255, 255, 255, 0.7);
        padding: 3px 5px;
        border-radius: 4px;
    }
    .projet-card:hover .item-actions,
    .projet-card:focus-within .item-actions {
        opacity: 1;
    }
    .item-actions button {
        background: none;
        border: none;
        cursor: pointer;
        padding: 0.2rem;
        line-height: 1;
    }

    .projet-title { font-weight: 600; color: var(--secondary-color, #6c757d); margin-bottom: 0.2rem; padding-right: 60px; }
    .projet-url { font-size: 0.9em; color: var(--dark-gray, #343a40); margin-bottom: 0.5rem; word-break: break-all; }
    .projet-url a { color: inherit; text-decoration: underline; }
    .projet-url a:hover { color: var(--primary-color, #0056b3); }
    .projet-description { font-size: 0.9em; color: #555; margin-top: 5px; margin-bottom: 10px; line-height: 1.5; }
    .projet-tech { font-size: 0.85em; color: var(--primary-color, #0056b3); margin-top: 5px; font-style: italic; }

    .empty-message {
        text-align: center;
        color: var(--dark-gray, #6c757d);
        padding: 1rem;
        border: 1px dashed #ced4da !important;
        border-radius: 4px;
        margin-top: 1rem;
    }

    .form-label { font-size: 0.875rem; margin-bottom: 0.25rem; }
    .form-control-sm { font-size: 0.875rem; }
    .text-danger { color: #dc3545 !important; }

    @media (max-width: 767.98px) {
        .form-repeater-item {
            padding: 0.75rem 1rem;
        }
        .projet-title {
            font-size: 1rem;
        }
        .form-section-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 0.5rem;
        }
        .projet-add-form .col-md-6,
        .editing-item .col-md-6 {
            flex: 0 0 100%;
            max-width: 100%;
        }
        .projet-add-form .row > .col-md-6:not(:last-child),
        .editing-item .row > .col-md-6:not(:last-child) {
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
