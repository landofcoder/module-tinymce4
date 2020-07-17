<?php
/**
 * LandOfCoder
 * 
 * NOTICE OF LICENSE
 * 
 * This source file is subject to the Landofcoder.com license that is
 * available through the world-wide-web at this URL:
 * https://www.landofcoder.com/license-agreement.html
 * 
 * DISCLAIMER
 * 
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 * 
 * @category   LandOfCoder
 * @package    Lof_TinyMce4
 * @copyright  Copyright (c) 2020 Landofcoder (https://www.LandOfCoder.com/)
 * @license    https://www.LandOfCoder.com/LICENSE-1.0.html
 */
declare(strict_types=1);

namespace Lof\TinyMce4\Model\Config\Wysiwyg;

/**
 * Additional plugins for the TinyMce 4 editor
 */
class Config implements \Magento\Framework\Data\Wysiwyg\ConfigProviderInterface
{
	/**
	 * @var \Magento\Framework\View\Asset\Repository
	 */
	private $assetRepo;

	/**
	 * @param \Magento\Framework\View\Asset\Repository $assetRepo
	 */
	public function __construct(
		\Magento\Framework\View\Asset\Repository $assetRepo
	) {
		$this->assetRepo = $assetRepo;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getConfig(\Magento\Framework\DataObject $config) : \Magento\Framework\DataObject
	{
		$config->addData([
			'tinymce4' => [
				'toolbar' => 'styleselect | bold italic | forecolor backcolor | undo redo | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | fullscreen',
				'plugins' => 'advlist autolink lists link image charmap print preview hr anchor pagebreak
							  searchreplace wordcount visualblocks visualchars code fullscreen
							  insertdatetime media nonbreaking save table contextmenu directionality
				              emoticons template paste textcolor colorpicker textpattern imagetools autoresize'
			]
		]);

		return $config;
	}
}
