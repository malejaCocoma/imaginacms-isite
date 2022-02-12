<?php

namespace Modules\Isite\View\Components;

use Illuminate\View\Component;

class ItemList extends Component
{
  
  
  public $item;
  public $mediaImage;
  public $view;
  public $withViewMoreButton;
  public $viewMoreButtonLabel;
  public $withCreatedDate;
  public $withCategory;
  public $withSummary;
  public $formatCreatedDate;
  public $orderClasses;
  public $numberCharactersSummary;
  public $editLink;
  public $tooltipEditLink;
  public $target;
  public $itemListLayout;
  public $positionNumber;
  public $imageAspect;
  public $imageObject;
  public $imageBorderRadio;
  public $imageBorderStyle;
  public $imageBorderWidth;
  public $imageBorderColor;
  public $imagePadding;
  public $withImageOpacity;
  public $imageOpacityColor;
  public $imageOpacityDirection;

  public $withTitle;
  public $titleAlign;
  public $titleTextSize;
  public $titleTextWeight;
  public $titleTextTransform;

  public $summaryAlign;
  public $summaryTextSize;
  public $summaryTextWeight;

  public $categoryAlign;
  public $categoryTextSize;
  public $categoryTextWeight;

  public $createdDateAlign;
  public $createdDateTextSize;
  public $createdDateTextWeight;

  public $buttonAlign;
  public $buttonLayout;
  public $buttonIcon;
  public $buttonIconLR;
  public $buttonColor;

  public $imagePosition;
  public $imagePositionVertical;
  public $contentPositionVertical;

  public $contentPadding;
  public $contentBorder;
  public $contentBorderColor;
  public $contentBorderRounded;

  public $contentMarginInsideX;
  public $contentBorderShadows;
  public $contentBorderShadowsHover;

  public $titleColor;
  public $summaryColor;
  public $categoryColor;
  public $createdDateColor;

  public $titleMarginT;
  public $titleMarginB;
  public $summaryMarginT;
  public $summaryMarginB;
  public $categoryMarginT;
  public $categoryMarginB;
  public $createdDateMarginT;
  public $createdDateMarginB;
  public $buttonMarginT;
  public $buttonMarginB;

  
  /**
   * Create a new component instance.
   *
     * @param $item
     * @param string $mediaImage
     * @param string $layout
     * @param null $parentAttributes
     * @param bool $withViewMoreButton
     * @param string $viewMoreButtonLabel
     * @param bool $withCreatedDate
     * @param string $formatCreatedDate
     * @param array $orderClasses
     * @param bool $withCategory
     * @param bool $withSummary
     * @param int $numberCharactersSummary
     * @param null $editLink
     * @param null $tooltipEditLink
     * @param null $itemComponentView
     * @param string $itemComponentTarget
     * @param null $itemListLayout
     * @param null $positionNumber
     * @param string $imageAspect
     * @param string $imageObject
     * @param int $imageBorderRadio
     * @param string $imageBorderStyle
     * @param int $imageBorderWidth
     * @param string $imageBorderColor
     * @param string $imageBorderRadioUnit
     * @param int $imagePadding
     * @param string $imageOpcityColor
     * @param string $itemStyle
     * @param bool $withTitle
     * @param string $titleAlign
     * @param string $titleTextSize
     * @param string $titleTextWeight
     * @param string $titleTextTransform
     * @param string $summaryAlign
     * @param string $summaryTextSize
     * @param string $summaryTextWeight
     * @param string $categoryAlign
     * @param string $categoryTextSize
     * @param string $categoryTextWeight
   */
  public function __construct($item, $mediaImage = "mainimage", $layout = 'item-list-layout-1', $parentAttributes = null,
                              $withViewMoreButton = false, $viewMoreButtonLabel = "isite::common.menu.viewMore",
                              $withCreatedDate = false, $formatCreatedDate = "d \\d\\e M", $orderClasses = [],
                              $withCategory = false, $withSummary = true, $numberCharactersSummary = 100, $editLink = null,
                              $tooltipEditLink = null, $itemComponentView = null, $itemComponentTarget = "_self", $itemListLayout = null,
                              $positionNumber = null, $imageAspect="auto", $imageObject="unset", $imageBorderRadio=0,
                              $imageBorderStyle = "solid",  $imageBorderWidth=0, $imageBorderColor="#000000",
                              $imagePadding=0, $withImageOpacity=false, $imageOpacityColor="opacity-dark",
                              $imageOpacityDirection="opacity-all", $withTitle=true, $titleAlign="text-left", $titleTextSize="20",
                              $titleTextWeight="font-weight-bold", $titleTextTransform="font-weight-normal", $summaryAlign="text-left",
                              $summaryTextSize="16", $summaryTextWeight="font-weight-normal",  $categoryAlign="text-left",  $categoryTextSize="18",
                              $categoryTextWeight="font-weight-normal", $createdDateAlign="text-left", $createdDateTextSize="14",
                              $createdDateTextWeight="font-weight-normal", $buttonAlign="text-left", $buttonLayout="border-0",
                              $buttonIcon=" ", $buttonIconLR="left", $imagePosition="1", $imagePositionVertical="align-self-center",
                              $contentPositionVertical="align-self-center", $contentPadding=0, $contentBorder=false, $contentBorderColor="#dddddd",
                              $contentBorderRounded=0, $buttonColor="primary", $contentMarginInsideX="mx-0",
                              $contentBorderShadows="none", $contentBorderShadowsHover=false, $titleColor="text-primary", $summaryColor="text-dark",
                              $categoryColor="text-primary", $createdDateColor="text-primary",  $titleMarginT="mt-0", $titleMarginB="mb-0",
                              $summaryMarginT="mt-0", $summaryMarginB="mb-0",  $categoryMarginT="mt-0", $categoryMarginB="mb-0",  $createdDateMarginT="mt-0",
                              $createdDateMarginB="mb-0",  $buttonMarginT="mt-0", $buttonMarginB="mb-0"  )
  {

    $this->item = $item;
    $this->mediaImage = $mediaImage;
    $this->positionNumber = $positionNumber;
    $this->view = "isite::frontend.components.item-list.layouts." . ($layout ?? 'item-list-layout-1') . ".index";
    $this->view = $itemComponentView ?? $this->view;
    $this->target = $itemComponentTarget;
    $this->withViewMoreButton = $withViewMoreButton;
    $this->viewMoreButtonLabel = $viewMoreButtonLabel;
    $this->withCreatedDate = $withCreatedDate;
    $this->formatCreatedDate = $formatCreatedDate;
    $this->withCategory = $withCategory;
    $this->withSummary = $withSummary;
    $this->numberCharactersSummary = $numberCharactersSummary;
    $this->orderClasses = !empty($orderClasses) ? $orderClasses : ["photo" => "order-0", "title" => "order-1", "date" => "order-2", "categoryTitle" => "order-3", "summary" => "order-4", "viewMoreButton" => "order-5"];
    $this->editLink = $editLink;
    $this->tooltipEditLink = $tooltipEditLink;
    $this->itemListLayout = $itemListLayout;
    $this->imageAspect = $imageAspect;
    $this->imageObject = $imageObject;
    $this->imageBorderRadio = $imageBorderRadio;
    $this->imageBorderStyle = $imageBorderStyle;
    $this->imageBorderWidth = $imageBorderWidth;
    $this->imageBorderColor = $imageBorderColor;
    $this->imagePadding = $imagePadding;
    $this->withImageOpacity = $withImageOpacity;
    $this->imageOpacityColor = $imageOpacityColor;
    $this->imageOpacityDirection = $imageOpacityDirection;

    $this->withTitle = $withTitle;
    $this->titleAlign = $titleAlign;
    $this->titleTextSize = $titleTextSize;
    $this->titleTextWeight = $titleTextWeight;
    $this->titleTextTransform = $titleTextTransform;

    $this->summaryAlign = $summaryAlign;
    $this->summaryTextSize = $summaryTextSize;
    $this->summaryTextWeight = $summaryTextWeight;

    $this->categoryAlign = $categoryAlign;
    $this->categoryTextSize = $categoryTextSize;
    $this->categoryTextWeight = $categoryTextWeight;

    $this->createdDateAlign = $createdDateAlign;
    $this->createdDateTextSize = $createdDateTextSize;
    $this->createdDateTextWeight = $createdDateTextWeight;

    $this->buttonAlign = $buttonAlign;
    $this->buttonLayout = $buttonLayout;
    $this->buttonIcon = $buttonIcon;
    $this->buttonIconLR = $buttonIconLR;
    $this->buttonColor=$buttonColor;

    $this->imagePosition = $imagePosition;
    $this->imagePositionVertical = $imagePositionVertical;
    $this->contentPositionVertical = $contentPositionVertical;

    $this->contentPadding=$contentPadding;
    $this->contentBorder=$contentBorder;
    $this->contentBorderColor=$contentBorderColor;
    $this->contentBorderRounded=$contentBorderRounded;

    $this->contentMarginInsideX=$contentMarginInsideX;
    $this->contentBorderShadows="$contentBorderShadows";
    $this->contentBorderShadowsHover=$contentBorderShadowsHover;

    $this->titleColor=$titleColor;
    $this->summaryColor=$summaryColor;
    $this->categoryColor=$categoryColor;
    $this->createdDateColor=$createdDateColor;

    $this->titleMarginT=$titleMarginT;
    $this->titleMarginB=$titleMarginB;
    $this->summaryMarginT=$summaryMarginT;
    $this->summaryMarginB=$summaryMarginB;
    $this->categoryMarginT=$categoryMarginT;
    $this->categoryMarginB=$categoryMarginB;
    $this->createdDateMarginT=$createdDateMarginT;
    $this->createdDateMarginB=$createdDateMarginB;
    $this->buttonMarginT=$buttonMarginT;
    $this->buttonMarginB=$buttonMarginB;




    if (!empty($parentAttributes))
      $this->getParentAttributes($parentAttributes);
  }
  
  private function getParentAttributes($parentAttributes)
  {
    
    isset($parentAttributes["mediaImage"]) ? $this->mediaImage = $parentAttributes["mediaImage"] : false;
    isset($parentAttributes["layout"]) ? $this->layout = $parentAttributes["layout"] : false;
    isset($parentAttributes["withViewMoreButton"]) ? $this->withViewMoreButton = $parentAttributes["withViewMoreButton"] : false;
    isset($parentAttributes["viewMoreButtonLabel"]) ? $this->viewMoreButtonLabel = $parentAttributes["viewMoreButtonLabel"] : false;
    isset($parentAttributes["withCreatedDate"]) ? $this->withCreatedDate = $parentAttributes["withCreatedDate"] : false;
    isset($parentAttributes["formatCreatedDate"]) ? $this->formatCreatedDate = $parentAttributes["formatCreatedDate"] : false;
    isset($parentAttributes["withCategory"]) ? $this->withCategory = $parentAttributes["withCategory"] : false;
    isset($parentAttributes["withSummary"]) ? $this->withSummary = $parentAttributes["withSummary"] : false;
    isset($parentAttributes["orderClasses"]) ? $this->orderClasses = !empty($parentAttributes["orderClasses"]) ? $parentAttributes["orderClasses"] : ["photo" => "order-1", "title" => "order-2", "date" => "order-3", "categoryTitle" => "order-4", "summary" => "order-5", "viewMoreButton" => "order-6"] : false;
    isset($parentAttributes["numberCharactersSummary"]) ? $this->numberCharactersSummary = $parentAttributes["numberCharactersSummary"] : 100;
    isset($parentAttributes["itemComponentView"]) ? $this->view = $parentAttributes["itemComponentView"] ?? $this->view : false;
    isset($parentAttributes["target"]) ? $this->target = $parentAttributes["target"] ?? "_self" : false;
    isset($parentAttributes["itemListLayout"]) ? $this->itemListLayout = $parentAttributes["itemListLayout"] : false;
    isset($parentAttributes["imageAspect"]) ? $this->imageAspect = $parentAttributes["imageAspect"] : false;
    isset($parentAttributes["imageObject"]) ? $this->imageObject = $parentAttributes["imageObject"] : false;
    isset($parentAttributes["imageBorderRadio"]) ? $this->imageBorderRadio = $parentAttributes["imageBorderRadio"] : false;
    isset($parentAttributes["imageBorderStyle"]) ? $this->imageBorderStyle = $parentAttributes["imageBorderStyle"] : false;
    isset($parentAttributes["imageBorderWidth"]) ? $this->imageBorderWidth = $parentAttributes["imageBorderWidth"] : false;
    isset($parentAttributes["imageBorderColor"]) ? $this->imageBorderColor = $parentAttributes["imageBorderColor"] : false;
    isset($parentAttributes["imagePadding"]) ? $this->imagePadding = $parentAttributes["imagePadding"] : false;
    isset($parentAttributes["withImageOpacity"]) ? $this->withImageOpacity = $parentAttributes["withImageOpacity"] : false;
    isset($parentAttributes["imageOpacityColor"]) ? $this->imageOpacityColor = $parentAttributes["imageOpacityColor"] : false;
    isset($parentAttributes["imageOpacityDirection"]) ? $this->imageOpacityDirection = $parentAttributes["imageOpacityDirection"] : false;
    isset($parentAttributes["withTitle"]) ? $this->withTitle = $parentAttributes["withTitle"] : false;
    isset($parentAttributes["titleAlign"]) ? $this->titleAlign = $parentAttributes["titleAlign"] : false;
    isset($parentAttributes["titleTextSize"]) ? $this->titleTextSize = $parentAttributes["titleTextSize"] : false;
    isset($parentAttributes["titleTextWeight"]) ? $this->titleTextWeight = $parentAttributes["titleTextWeight"] : false;
    isset($parentAttributes["titleTextTransform"]) ? $this->titleTextTransform = $parentAttributes["titleTextTransform"] : false;
    isset($parentAttributes["summaryAlign"]) ? $this->summaryAlign = $parentAttributes["summaryAlign"] : false;
    isset($parentAttributes["summaryTextSize"]) ? $this->summaryTextSize = $parentAttributes["summaryTextSize"] : false;
    isset($parentAttributes["summaryTextWeight"]) ? $this->summaryTextWeight = $parentAttributes["summaryTextWeight"] : false;
    isset($parentAttributes["categoryAlign"]) ? $this->categoryAlign = $parentAttributes["categoryAlign"] : false;
    isset($parentAttributes["categoryTextSize"]) ? $this->categoryTextSize = $parentAttributes["categoryTextSize"] : false;
    isset($parentAttributes["categoryTextWeight"]) ? $this->categoryTextWeight = $parentAttributes["categoryTextWeight"] : false;
    isset($parentAttributes["createdDateAlign"]) ? $this->createdDateAlign = $parentAttributes["createdDateAlign"] : false;
    isset($parentAttributes["createdDateTextSize"]) ? $this->createdDateTextSize = $parentAttributes["createdDateTextSize"] : false;
    isset($parentAttributes["createdDateTextWeight"]) ? $this->createdDateTextWeight = $parentAttributes["createdDateTextWeight"] : false;
    isset($parentAttributes["buttonAlign"]) ? $this->buttonAlign = $parentAttributes["buttonAlign"] : false;
    isset($parentAttributes["buttonLayout"]) ? $this->buttonLayout = $parentAttributes["buttonLayout"] : false;
    isset($parentAttributes["buttonIcon"]) ? $this->buttonIcon = $parentAttributes["buttonIcon"] : false;
    isset($parentAttributes["buttonIconLR"]) ? $this->buttonIconLR = $parentAttributes["buttonIconLR"] : false;
    isset($parentAttributes["buttonColor"]) ? $this->buttonColor = $parentAttributes["buttonColor"] : false;
    isset($parentAttributes["imagePosition"]) ? $this->imagePosition = $parentAttributes["imagePosition"] : false;
    isset($parentAttributes["imagePositionVertical"]) ? $this->imagePositionVertical = $parentAttributes["imagePositionVertical"] : false;
    isset($parentAttributes["contentPositionVertical"]) ? $this->contentPositionVertical = $parentAttributes["contentPositionVertical"] : false;
    isset($parentAttributes["contentPadding"]) ? $this->contentPadding = $parentAttributes["contentPadding"] : false;
    isset($parentAttributes["contentBorder"]) ? $this->contentBorder = $parentAttributes["contentBorder"] : false;
    isset($parentAttributes["contentBorderColor"]) ? $this->contentBorderColor = $parentAttributes["contentBorderColor"] : false;
    isset($parentAttributes["contentBorderRounded"]) ? $this->contentBorderRounded = $parentAttributes["contentBorderRounded"] : false;
    isset($parentAttributes["contentMarginInsideX"]) ? $this->contentMarginInsideX = $parentAttributes["contentMarginInsideX"] : false;
    isset($parentAttributes["contentBorderShadows"]) ? $this->contentBorderShadows = $parentAttributes["contentBorderShadows"] : false;
    isset($parentAttributes["contentBorderShadowsHover"]) ? $this->contentBorderShadowsHover = $parentAttributes["contentBorderShadowsHover"] : false;
    isset($parentAttributes["titleColor"]) ? $this->titleColor = $parentAttributes["titleColor"] : false;
    isset($parentAttributes["summaryColor"]) ? $this->summaryColor = $parentAttributes["summaryColor"] : false;
    isset($parentAttributes["categoryColor"]) ? $this->categoryColor = $parentAttributes["categoryColor"] : false;
    isset($parentAttributes["createdDateColor"]) ? $this->createdDateColor = $parentAttributes["createdDateColor"] : false;
    isset($parentAttributes["titleMarginT"]) ? $this->titleMarginT = $parentAttributes["titleMarginT"] : false;
    isset($parentAttributes["titleMarginB"]) ? $this->titleMarginB = $parentAttributes["titleMarginB"] : false;
    isset($parentAttributes["summaryMarginT"]) ? $this->summaryMarginT = $parentAttributes["summaryMarginT"] : false;
    isset($parentAttributes["summaryMarginB"]) ? $this->summaryMarginB = $parentAttributes["summaryMarginB"] : false;
    isset($parentAttributes["categoryMarginT"]) ? $this->categoryMarginT = $parentAttributes["categoryMarginT"] : false;
    isset($parentAttributes["categoryMarginB"]) ? $this->categoryMarginB = $parentAttributes["categoryMarginB"] : false;
    isset($parentAttributes["createdDateMarginT"]) ? $this->createdDateMarginT = $parentAttributes["createdDateMarginT"] : false;
    isset($parentAttributes["createdDateMarginB"]) ? $this->createdDateMarginB = $parentAttributes["createdDateMarginB"] : false;
    isset($parentAttributes["buttonMarginT"]) ? $this->buttonMarginT = $parentAttributes["buttonMarginT"] : false;
    isset($parentAttributes["buttonMarginB"]) ? $this->buttonMarginB = $parentAttributes["buttonMarginB"] : false;
    //isset($parentAttributes[""]) ? $this-> = $parentAttributes[""] : false;
    
  }
  
  /**
   * Get the view / contents that represent the component.
   *
   * @return \Illuminate\Contracts\View\View|string
   */
  public function render()
  {
    return view($this->view);
  }
}