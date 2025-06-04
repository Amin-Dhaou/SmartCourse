<?php

namespace App\Controller\Admin;

use App\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Vich\UploaderBundle\Form\Type\VichImageType;

class ProductCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Product::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')
                ->setLabel('Nom du produit'),

            AssociationField::new('category')
                ->setLabel('Catégorie'),

            NumberField::new('price')
                ->setLabel('Prix'),

            TextEditorField::new('description')
                ->setLabel('Description'),

            // Champ pour télécharger l'image
            TextField::new('imageFile')
                ->setFormType(VichImageType::class)
                ->setLabel('Fichier image')
                ->onlyOnForms(), // Ce champ n'est affiché que dans les formulaires (ajout/édition)

            // Champ pour afficher l'image dans l'index et le détail
            ImageField::new('image')
                ->setLabel('Image')
                ->setBasePath('/uploads/products') // Chemin relatif vers le dossier des images
                ->onlyOnIndex(), // Ce champ n'est affiché que dans la liste et le détail

            BooleanField::new('status')
                ->setLabel('Statut'),
        ];
    }
}