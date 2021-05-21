<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.registry' shared service.

include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormRegistryInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormRegistry.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/FormExtensionInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/Extension/DependencyInjection/DependencyInjectionExtension.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/ResolvedFormTypeFactoryInterface.php';
include_once \dirname(__DIR__, 5).'/lib/vendor/symfony/form/ResolvedFormTypeFactory.php';

return $this->privates['form.registry'] = new \Symfony\Component\Form\FormRegistry([0 => new \Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'App\\Form\\Type\\AbstractExternalIdEntityType' => ['privates', 'App\\Form\\Type\\AbstractExternalIdEntityType', 'getAbstractExternalIdEntityTypeService.php', true],
    'App\\Form\\Type\\BaylorCmsType' => ['privates', 'App\\Form\\Type\\BaylorCmsType', 'getBaylorCmsTypeService.php', true],
    'App\\Form\\Type\\BootstrapFileType' => ['privates', 'App\\Form\\Type\\BootstrapFileType', 'getBootstrapFileTypeService.php', true],
    'App\\Form\\Type\\ContestExportType' => ['privates', 'App\\Form\\Type\\ContestExportType', 'getContestExportTypeService.php', true],
    'App\\Form\\Type\\ContestImportType' => ['privates', 'App\\Form\\Type\\ContestImportType', 'getContestImportTypeService.php', true],
    'App\\Form\\Type\\ContestProblemType' => ['privates', 'App\\Form\\Type\\ContestProblemType', 'getContestProblemTypeService.php', true],
    'App\\Form\\Type\\ContestType' => ['privates', 'App\\Form\\Type\\ContestType', 'getContestTypeService.php', true],
    'App\\Form\\Type\\ExecutableType' => ['privates', 'App\\Form\\Type\\ExecutableType', 'getExecutableTypeService.php', true],
    'App\\Form\\Type\\ExecutableUploadType' => ['privates', 'App\\Form\\Type\\ExecutableUploadType', 'getExecutableUploadTypeService.php', true],
    'App\\Form\\Type\\FinalizeContestType' => ['privates', 'App\\Form\\Type\\FinalizeContestType', 'getFinalizeContestTypeService.php', true],
    'App\\Form\\Type\\GeneratePasswordsType' => ['privates', 'App\\Form\\Type\\GeneratePasswordsType', 'getGeneratePasswordsTypeService.php', true],
    'App\\Form\\Type\\JsonImportType' => ['privates', 'App\\Form\\Type\\JsonImportType', 'getJsonImportTypeService.php', true],
    'App\\Form\\Type\\JudgehostRestrictionType' => ['privates', 'App\\Form\\Type\\JudgehostRestrictionType', 'getJudgehostRestrictionTypeService.php', true],
    'App\\Form\\Type\\JudgehostType' => ['privates', 'App\\Form\\Type\\JudgehostType', 'getJudgehostTypeService.php', true],
    'App\\Form\\Type\\JudgehostsType' => ['privates', 'App\\Form\\Type\\JudgehostsType', 'getJudgehostsTypeService.php', true],
    'App\\Form\\Type\\LanguageType' => ['privates', 'App\\Form\\Type\\LanguageType', 'getLanguageTypeService.php', true],
    'App\\Form\\Type\\MinimalUserType' => ['privates', 'App\\Form\\Type\\MinimalUserType', 'getMinimalUserTypeService.php', true],
    'App\\Form\\Type\\PrintType' => ['privates', 'App\\Form\\Type\\PrintType', 'getPrintTypeService.php', true],
    'App\\Form\\Type\\ProblemType' => ['privates', 'App\\Form\\Type\\ProblemType', 'getProblemTypeService.php', true],
    'App\\Form\\Type\\ProblemUploadMultipleType' => ['privates', 'App\\Form\\Type\\ProblemUploadMultipleType', 'getProblemUploadMultipleTypeService.php', true],
    'App\\Form\\Type\\ProblemUploadType' => ['privates', 'App\\Form\\Type\\ProblemUploadType', 'getProblemUploadTypeService.php', true],
    'App\\Form\\Type\\RejudgingType' => ['privates', 'App\\Form\\Type\\RejudgingType', 'getRejudgingTypeService.php', true],
    'App\\Form\\Type\\RemovedIntervalType' => ['privates', 'App\\Form\\Type\\RemovedIntervalType', 'getRemovedIntervalTypeService.php', true],
    'App\\Form\\Type\\SubmitProblemType' => ['privates', 'App\\Form\\Type\\SubmitProblemType', 'getSubmitProblemTypeService.php', true],
    'App\\Form\\Type\\TeamAffiliationType' => ['privates', 'App\\Form\\Type\\TeamAffiliationType', 'getTeamAffiliationTypeService.php', true],
    'App\\Form\\Type\\TeamCategoryType' => ['privates', 'App\\Form\\Type\\TeamCategoryType', 'getTeamCategoryTypeService.php', true],
    'App\\Form\\Type\\TeamClarificationType' => ['privates', 'App\\Form\\Type\\TeamClarificationType', 'getTeamClarificationTypeService.php', true],
    'App\\Form\\Type\\TeamType' => ['privates', 'App\\Form\\Type\\TeamType', 'getTeamTypeService.php', true],
    'App\\Form\\Type\\TsvImportType' => ['privates', 'App\\Form\\Type\\TsvImportType', 'getTsvImportTypeService.php', true],
    'App\\Form\\Type\\UserRegistrationType' => ['privates', 'App\\Form\\Type\\UserRegistrationType', 'getUserRegistrationTypeService.php', true],
    'App\\Form\\Type\\UserType' => ['privates', 'App\\Form\\Type\\UserType', 'getUserTypeService.php', true],
    'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => ['privates', 'form.type.entity', 'getForm_Type_EntityService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => ['privates', 'form.type.choice', 'getForm_Type_ChoiceService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => ['services', 'form.type.file', 'getForm_Type_FileService.php', true],
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => ['privates', 'form.type.form', 'getForm_Type_FormService.php', true],
], [
    'App\\Form\\Type\\AbstractExternalIdEntityType' => '?',
    'App\\Form\\Type\\BaylorCmsType' => '?',
    'App\\Form\\Type\\BootstrapFileType' => '?',
    'App\\Form\\Type\\ContestExportType' => '?',
    'App\\Form\\Type\\ContestImportType' => '?',
    'App\\Form\\Type\\ContestProblemType' => '?',
    'App\\Form\\Type\\ContestType' => '?',
    'App\\Form\\Type\\ExecutableType' => '?',
    'App\\Form\\Type\\ExecutableUploadType' => '?',
    'App\\Form\\Type\\FinalizeContestType' => '?',
    'App\\Form\\Type\\GeneratePasswordsType' => '?',
    'App\\Form\\Type\\JsonImportType' => '?',
    'App\\Form\\Type\\JudgehostRestrictionType' => '?',
    'App\\Form\\Type\\JudgehostType' => '?',
    'App\\Form\\Type\\JudgehostsType' => '?',
    'App\\Form\\Type\\LanguageType' => '?',
    'App\\Form\\Type\\MinimalUserType' => '?',
    'App\\Form\\Type\\PrintType' => '?',
    'App\\Form\\Type\\ProblemType' => '?',
    'App\\Form\\Type\\ProblemUploadMultipleType' => '?',
    'App\\Form\\Type\\ProblemUploadType' => '?',
    'App\\Form\\Type\\RejudgingType' => '?',
    'App\\Form\\Type\\RemovedIntervalType' => '?',
    'App\\Form\\Type\\SubmitProblemType' => '?',
    'App\\Form\\Type\\TeamAffiliationType' => '?',
    'App\\Form\\Type\\TeamCategoryType' => '?',
    'App\\Form\\Type\\TeamClarificationType' => '?',
    'App\\Form\\Type\\TeamType' => '?',
    'App\\Form\\Type\\TsvImportType' => '?',
    'App\\Form\\Type\\UserRegistrationType' => '?',
    'App\\Form\\Type\\UserType' => '?',
    'Symfony\\Bridge\\Doctrine\\Form\\Type\\EntityType' => '?',
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType' => '?',
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FileType' => '?',
    'Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => '?',
]), ['Symfony\\Component\\Form\\Extension\\Core\\Type\\FormType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['nelmio_api_doc.form.documentation_extension'] ?? ($this->privates['nelmio_api_doc.form.documentation_extension'] = new \Nelmio\ApiDocBundle\Form\Extension\DocumentationExtension()));
    yield 1 => ($this->privates['form.type_extension.form.transformation_failure_handling'] ?? ($this->privates['form.type_extension.form.transformation_failure_handling'] = new \Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension(NULL)));
    yield 2 => ($this->privates['form.type_extension.form.http_foundation'] ?? $this->load('getForm_TypeExtension_Form_HttpFoundationService.php'));
    yield 3 => ($this->privates['form.type_extension.form.validator'] ?? $this->load('getForm_TypeExtension_Form_ValidatorService.php'));
    yield 4 => ($this->privates['form.type_extension.csrf'] ?? $this->load('getForm_TypeExtension_CsrfService.php'));
    yield 5 => ($this->privates['fos_rest.form.extension.csrf_disable'] ?? $this->load('getFosRest_Form_Extension_CsrfDisableService.php'));
}, 6), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\RepeatedType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.repeated.validator'] ?? ($this->privates['form.type_extension.repeated.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension()));
}, 1), 'Symfony\\Component\\Form\\Extension\\Core\\Type\\SubmitType' => new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_extension.submit.validator'] ?? ($this->privates['form.type_extension.submit.validator'] = new \Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension()));
}, 1)], new RewindableGenerator(function () {
    yield 0 => ($this->privates['form.type_guesser.doctrine'] ?? $this->load('getForm_TypeGuesser_DoctrineService.php'));
    yield 1 => ($this->privates['form.type_guesser.validator'] ?? $this->load('getForm_TypeGuesser_ValidatorService.php'));
}, 2))], new \Symfony\Component\Form\ResolvedFormTypeFactory());
