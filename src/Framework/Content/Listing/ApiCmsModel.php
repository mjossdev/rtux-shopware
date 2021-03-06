<?php declare(strict_types=1);
namespace Boxalino\RealTimeUserExperience\Framework\Content\Listing;

use Boxalino\RealTimeUserExperienceApi\Framework\Content\Listing\ApiCmsModelInterface;
use Boxalino\RealTimeUserExperienceApi\Service\Api\Response\ApiResponseViewInterface;
use Shopware\Core\Framework\Struct\Struct;

/**
 * Class ApiCmsModel
 * Model used for the Boxalino Narrative CMS block
 *
 * @package Boxalino\RealTimeUserExperience\Framework\Content\Listing
 */
class ApiCmsModel extends Struct
    implements ApiCmsModelInterface
{
    /**
     * @var \ArrayIterator
     */
    protected $blocks;

    /**
     * @var string
     */
    protected $requestId;

    /**
     * @var string
     */
    protected $groupBy;

    /**
     * @var string
     */
    protected $variantUuid;

    /**
     * @var int
     */
    protected $totalHitCount = 0;

    /**
     * @var null | string
     */
    protected $navigationId = null;

    /**
     * @var \ArrayIterator
     */
    protected $left;

    /**
     * @var \ArrayIterator
     */
    protected $right;

    /**
     * @var \ArrayIterator
     */
    protected $bottom;

    /**
     * @var \ArrayIterator
     */
    protected $top;

    /**
     * @var bool
     */
    protected $fallback = false;

    /**
     * @return \ArrayIterator
     */
    public function getBlocks(): \ArrayIterator
    {
        return $this->blocks;
    }

    /**
     * @param \ArrayIterator $blocks
     * @return ApiCmsModel
     */
    public function setBlocks(\ArrayIterator $blocks): ApiResponseViewInterface
    {
        $this->blocks = $blocks;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestId(): string
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     * @return ApiCmsModel
     */
    public function setRequestId(string $requestId): ApiResponseViewInterface
    {
        $this->requestId = $requestId;
        return $this;
    }

    /**
     * @return string
     */
    public function getGroupBy(): string
    {
        return $this->groupBy;
    }

    /**
     * @param string $groupBy
     * @return ApiCmsModel
     */
    public function setGroupBy(string $groupBy): ApiResponseViewInterface
    {
        $this->groupBy = $groupBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getVariantUuid(): string
    {
        return $this->variantUuid;
    }

    /**
     * @param string $variantUuid
     * @return ApiCmsModel
     */
    public function setVariantUuid(string $variantUuid): ApiResponseViewInterface
    {
        $this->variantUuid = $variantUuid;
        return $this;
    }

    /**
     * @param bool $fallback
     * @return $this|ApiResponseViewInterface
     */
    public function setFallback(bool $fallback): ApiResponseViewInterface
    {
        $this->fallback = $fallback;
        return $this;
    }

    /**
     * @return bool
     */
    public function isFallback(): bool
    {
        return $this->fallback;
    }

    /**
     * @return int
     */
    public function getTotalHitCount(): int
    {
        return $this->totalHitCount;
    }

    /**
     * @param int $totalHitCount
     * @return ApiCmsModel
     */
    public function setTotalHitCount(int $totalHitCount): ApiCmsModelInterface
    {
        $this->totalHitCount = $totalHitCount;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getNavigationId(): ?string
    {
        return $this->navigationId;
    }

    /**
     * @param string|null $navigationId
     * @return ApiCmsModel
     */
    public function setNavigationId(?string $navigationId): ApiCmsModelInterface
    {
        $this->navigationId = $navigationId;
        return $this;
    }

    /**
     * @return \ArrayIterator
     */
    public function getLeft(): \ArrayIterator
    {
        return $this->left;
    }

    /**
     * @param \ArrayIterator $left
     * @return ApiCmsModel
     */
    public function setLeft(\ArrayIterator $left): ApiCmsModelInterface
    {
        $this->left = $left;
        return $this;
    }

    /**
     * @return \ArrayIterator
     */
    public function getRight(): \ArrayIterator
    {
        return $this->right;
    }

    /**
     * @param \ArrayIterator $right
     * @return ApiCmsModel
     */
    public function setRight(\ArrayIterator $right): ApiCmsModelInterface
    {
        $this->right = $right;
        return $this;
    }

    /**
     * @return \ArrayIterator
     */
    public function getBottom(): \ArrayIterator
    {
        return $this->bottom;
    }

    /**
     * @param \ArrayIterator $bottom
     * @return ApiCmsModel
     */
    public function setBottom(\ArrayIterator $bottom): ApiCmsModelInterface
    {
        $this->bottom = $bottom;
        return $this;
    }

    /**
     * @return \ArrayIterator
     */
    public function getTop(): \ArrayIterator
    {
        return $this->top;
    }

    /**
     * @param \ArrayIterator $top
     * @return ApiCmsModel
     */
    public function setTop(\ArrayIterator $top): ApiCmsModelInterface
    {
        $this->top = $top;
        return $this;
    }


}
