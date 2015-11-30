<?php
	namespace PHPSTORM_META {
	/** @noinspection PhpUnusedLocalVariableInspection */
	/** @noinspection PhpIllegalArrayKeyTypeInspection */
	$STATIC_METHOD_TYPES = [

		\D('') => [
			'Admin' instanceof Home\Model\AdminModel,
			'Relation' instanceof Think\Model\RelationModel,
			'Common' instanceof Home\Model\CommonModel,
			'Adv' instanceof Think\Model\AdvModel,
			'Merge' instanceof Think\Model\MergeModel,
			'More' instanceof Home\Model\MoreModel,
			'View' instanceof Think\Model\ViewModel,
			'Mongo' instanceof Think\Model\MongoModel,
		],
		\DS('') => [
			'MoreService' instanceof Home\Service\MoreService,
			'CommonService' instanceof Home\Service\CommonService,
			'AdminService' instanceof Home\Service\AdminService,
		]
	];
}