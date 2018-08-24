<?php

namespace Oro\Bundle\SaleBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

use Oro\Bundle\EntityConfigBundle\Metadata\Annotation\Config;
use Oro\Bundle\ProductBundle\Entity\Product;
use Oro\Bundle\ProductBundle\Model\ProductHolderInterface;

/**
 * @ORM\Table(name="oro_sale_quote_product")
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 * @Config(
 *      defaultValues={
 *          "entity"={
 *              "icon"="fa-list-alt"
 *          },
 *          "security"={
 *              "type"="ACL",
 *              "group_name"=""
 *          }
 *      }
 * )
 * @SuppressWarnings(PHPMD.TooManyMethods)
 * @SuppressWarnings(PHPMD.TooManyPublicMethods)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 */
class QuoteProduct implements ProductHolderInterface
{
    const TYPE_REQUESTED        = 10;
    const TYPE_OFFER            = 20;
    const TYPE_NOT_AVAILABLE    = 30;

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Quote
     *
     * @ORM\ManyToOne(targetEntity="Quote", inversedBy="quoteProducts")
     * @ORM\JoinColumn(name="quote_id", referencedColumnName="id", onDelete="CASCADE")
     */
    protected $quote;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\ProductBundle\Entity\Product")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $product;

    /**
     * @var string
     *
     * @ORM\Column(name="free_form_product", type="string", length=255, nullable=true)
     */
    protected $freeFormProduct;

    /**
     * @var string
     *
     * @ORM\Column(name="product_sku", type="string", length=255, nullable=true)
     */
    protected $productSku;

    /**
     * @var Product
     *
     * @ORM\ManyToOne(targetEntity="Oro\Bundle\ProductBundle\Entity\Product")
     * @ORM\JoinColumn(name="product_replacement_id", referencedColumnName="id", onDelete="SET NULL")
     */
    protected $productReplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="free_form_product_replacement", type="string", length=255, nullable=true)
     */
    protected $freeFormProductReplacement;

    /**
     * @var string
     *
     * @ORM\Column(name="product_replacement_sku", type="string", length=255, nullable=true)
     */
    protected $productReplacementSku;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="smallint", nullable=true)
     */
    protected $type = self::TYPE_REQUESTED;

    /**
     * @var string
     *
     * @ORM\Column(name="comment", type="text", nullable=true)
     */
    protected $comment;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_customer", type="text", nullable=true)
     */
    protected $commentCustomer;

    /**
     * @var Collection|QuoteProductOffer[]
     *
     * @ORM\OneToMany(targetEntity="QuoteProductOffer", mappedBy="quoteProduct", cascade={"ALL"}, orphanRemoval=true)
     */
    protected $quoteProductOffers;

    /**
     * @var Collection|QuoteProductRequest[]
     *
     * @ORM\OneToMany(targetEntity="QuoteProductRequest", mappedBy="quoteProduct", cascade={"ALL"}, orphanRemoval=true)
     */
    protected $quoteProductRequests;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->quoteProductOffers   = new ArrayCollection();
        $this->quoteProductRequests = new ArrayCollection();
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string)$this->productSku;
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function updateProducts()
    {
        if ($this->product) {
            $this->productSku = $this->product->getSku();
            $this->freeFormProduct = (string) $this->product;
        }
        if ($this->productReplacement) {
            $this->productReplacementSku = $this->productReplacement->getSku();
            $this->freeFormProductReplacement = (string) $this->productReplacement;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getEntityIdentifier()
    {
        return $this->getId();
    }

    /**
     * @return array
     */
    public static function getTypes()
    {
        return [
            self::TYPE_OFFER            => 'offer',
            self::TYPE_REQUESTED        => 'requested',
            self::TYPE_NOT_AVAILABLE    => 'not_available',
        ];
    }

    /**
     * Check that type is TYPE_OFFER
     *
     * @return boolean
     */
    public function isTypeOffer()
    {
        return static::TYPE_OFFER === $this->getType();
    }

    /**
     * Check that type is TYPE_REQUESTED
     *
     * @return boolean
     */
    public function isTypeRequested()
    {
        return static::TYPE_REQUESTED === $this->getType();
    }

    /**
     * Check that type is TYPE_NOT_AVAILABLE
     *
     * @return boolean
     */
    public function isTypeNotAvailable()
    {
        return static::TYPE_NOT_AVAILABLE === $this->getType();
    }

    /**
     * Check that free form used for product
     *
     * @return boolean
     */
    public function isProductFreeForm()
    {
        return (!$this->product) && ('' !== trim($this->freeFormProduct));
    }

    /**
     * Check that free form used for productReplacement
     *
     * @return boolean
     */
    public function isProductReplacementFreeForm()
    {
        return (!$this->productReplacement) && ('' !== trim($this->freeFormProductReplacement));
    }

    /**
     * Get actual Product name
     * @return string
     */
    public function getProductName()
    {
        if ($this->isTypeNotAvailable()) {
            return $this->isProductReplacementFreeForm()
                ? $this->freeFormProductReplacement
                : (string) $this->productReplacement;
        }

        return $this->isProductFreeForm()
            ? $this->freeFormProduct
            : (string) $this->product;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set quote
     *
     * @param Quote $quote
     * @return QuoteProduct
     */
    public function setQuote(Quote $quote = null)
    {
        $this->quote = $quote;

        return $this;
    }

    /**
     * Get quote
     *
     * @return Quote
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * Set product
     *
     * @param Product $product
     * @return QuoteProduct
     */
    public function setProduct(Product $product = null)
    {
        $this->product = $product;
        $this->updateProducts();

        return $this;
    }

    /**
     * Get product
     *
     * @return Product
     */
    public function getProduct()
    {
        if ($this->isTypeNotAvailable()) {
            return $this->productReplacement;
        } else {
            return $this->product;
        }
    }

    /**
     * @param string $freeFormProduct
     * @return QuoteProduct
     */
    public function setFreeFormProduct($freeFormProduct)
    {
        $this->freeFormProduct = $freeFormProduct;

        return $this;
    }

    /**
     * @return string
     */
    public function getFreeFormProduct()
    {
        return $this->freeFormProduct;
    }

    /**
     * Set productSku
     *
     * @param string $productSku
     * @return QuoteProduct
     */
    public function setProductSku($productSku)
    {
        $this->productSku = $productSku;

        return $this;
    }

    /**
     * Get productSku
     *
     * @return string
     */
    public function getProductSku()
    {
        if ($this->isTypeNotAvailable()) {
            return $this->productReplacementSku;
        } else {
            return $this->productSku;
        }
    }

    /**
     * Set productReplacement
     *
     * @param Product $productReplacement
     * @return QuoteProduct
     */
    public function setProductReplacement(Product $productReplacement = null)
    {
        $this->productReplacement = $productReplacement;
        $this->updateProducts();

        return $this;
    }

    /**
     * Get productReplacement
     *
     * @return Product
     */
    public function getProductReplacement()
    {
        return $this->productReplacement;
    }

    /**
     * @param string $freeFormProductReplacement
     * @return QuoteProduct
     */
    public function setFreeFormProductReplacement($freeFormProductReplacement)
    {
        $this->freeFormProductReplacement = $freeFormProductReplacement;

        return $this;
    }

    /**
     * @return string
     */
    public function getFreeFormProductReplacement()
    {
        return $this->freeFormProductReplacement;
    }

    /**
     * Set productReplacementSku
     *
     * @param string $productReplacementSku
     * @return QuoteProduct
     */
    public function setProductReplacementSku($productReplacementSku)
    {
        $this->productReplacementSku = $productReplacementSku;

        return $this;
    }

    /**
     * Get productReplacementSku
     *
     * @return string
     */
    public function getProductReplacementSku()
    {
        return $this->productReplacementSku;
    }

    /**
     * Set type
     *
     * @param int $type
     * @return QuoteProduct
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set seller comment
     *
     * @param string $comment
     * @return QuoteProduct
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get seller comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set customer comment
     *
     * @param string $commentCustomer
     * @return QuoteProduct
     */
    public function setCommentCustomer($commentCustomer)
    {
        $this->commentCustomer = $commentCustomer;

        return $this;
    }

    /**
     * Get customer comment
     *
     * @return string
     */
    public function getCommentCustomer()
    {
        return $this->commentCustomer;
    }

    /**
     * Add quoteProductOffer
     *
     * @param QuoteProductOffer $quoteProductOffer
     * @return QuoteProduct
     */
    public function addQuoteProductOffer(QuoteProductOffer $quoteProductOffer)
    {
        if (!$this->quoteProductOffers->contains($quoteProductOffer)) {
            $this->quoteProductOffers->add($quoteProductOffer);
            $quoteProductOffer->setQuoteProduct($this);
        }

        return $this;
    }

    /**
     * Remove quoteProductOffer
     *
     * @param QuoteProductOffer $quoteProductOffer
     * @return QuoteProduct
     */
    public function removeQuoteProductOffer(QuoteProductOffer $quoteProductOffer)
    {
        if ($this->quoteProductOffers->contains($quoteProductOffer)) {
            $this->quoteProductOffers->removeElement($quoteProductOffer);
        }

        return $this;
    }

    /**
     * Get quoteProductOffers
     *
     * @return Collection|QuoteProductOffer[]
     */
    public function getQuoteProductOffers()
    {
        return $this->quoteProductOffers;
    }

    /**
     * @param int $priceType
     * @return bool
     */
    public function hasQuoteProductOfferByPriceType($priceType)
    {
        foreach ($this->quoteProductOffers as $offer) {
            if ($offer->getPriceType() == $priceType) {
                return true;
            }
        }

        return false;
    }

    /**
     * Add quoteProductRequest
     *
     * @param QuoteProductRequest $quoteProductRequest
     * @return QuoteProduct
     */
    public function addQuoteProductRequest(QuoteProductRequest $quoteProductRequest)
    {
        if (!$this->quoteProductRequests->contains($quoteProductRequest)) {
            $this->quoteProductRequests->add($quoteProductRequest);
            $quoteProductRequest->setQuoteProduct($this);
        }

        return $this;
    }

    /**
     * Remove quoteProductRequest
     *
     * @param QuoteProductRequest $quoteProductRequest
     * @return QuoteProduct
     */
    public function removeQuoteProductRequest(QuoteProductRequest $quoteProductRequest)
    {
        if ($this->quoteProductRequests->contains($quoteProductRequest)) {
            $this->quoteProductRequests->removeElement($quoteProductRequest);
        }

        return $this;
    }

    /**
     * Get quoteProductRequests
     *
     * @return Collection|QuoteProductRequest[]
     */
    public function getQuoteProductRequests()
    {
        return $this->quoteProductRequests;
    }

    /**
     * @return bool
     */
    public function hasOfferVariants()
    {
        if (count($this->quoteProductOffers) > 1) {
            return true;
        }

        /** @var QuoteProductOffer $firstItem */
        $firstItem = $this->quoteProductOffers->first();

        return $firstItem && $firstItem->isAllowIncrements();
    }

    /**
     * @return bool
     */
    public function hasIncrementalOffers()
    {
        foreach ($this->quoteProductOffers as $offer) {
            if ($offer->isAllowIncrements()) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return null|Product
     */
    public function getParentProduct()
    {
        // QuoteProduct doesn't support configurable products
        return null;
    }
}
