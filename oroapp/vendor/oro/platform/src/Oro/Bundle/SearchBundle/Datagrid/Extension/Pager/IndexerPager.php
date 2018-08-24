<?php

namespace Oro\Bundle\SearchBundle\Datagrid\Extension\Pager;

use Oro\Bundle\SearchBundle\Query\SearchQueryInterface;
use Oro\Bundle\SearchBundle\Query\Query;

class IndexerPager
{
    /**
     * @var int
     */
    protected $maxPerPage = 10;

    /**
     * @var int
     */
    protected $page = 1;

    /**
     * @var int
     */
    protected $nbResults = 0;

    /**
     * @var SearchQueryInterface
     */
    protected $query;

    /**
     * @param SearchQueryInterface $query
     */
    public function setQuery(SearchQueryInterface $query)
    {
        $this->query = $query;
    }

    /**
     * Initialize the Pager.
     */
    public function init()
    {
        if (!$this->query) {
            throw new \LogicException('Indexer query must be set');
        }
    }

    /**
     * Returns the number of results.
     *
     * @return integer
     */
    public function getNbResults()
    {
        return $this->nbResults = $this->query->getTotalCount();
    }

    /**
     * Calculate first result based on page and max-per-page
     */
    protected function calculateFirstResult()
    {
        $maxPerPage = $this->getMaxPerPage();
        $page = $this->getPage();

        $this->query->setFirstResult($maxPerPage * ($page - 1));
    }

    /**
     * @param int $maxPerPage
     */
    public function setMaxPerPage($maxPerPage)
    {
        if ($maxPerPage > 0) {
            $this->maxPerPage = $maxPerPage;
            $this->query->setMaxResults($maxPerPage);
        } else {
            $this->maxPerPage = 0;
            $this->query->setMaxResults(Query::INFINITY);
        }

        $this->calculateFirstResult();
    }

    /**
     * @return int
     */
    public function getMaxPerPage()
    {
        return $this->maxPerPage;
    }

    /**
     * @param  int  $page
     * @return void
     */
    public function setPage($page)
    {
        $this->page = $page;

        $this->calculateFirstResult();
    }

    /**
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Returns the previous page.
     *
     * @return int
     */
    public function getPreviousPage()
    {
        return max($this->getPage() - 1, $this->getFirstPage());
    }

    /**
     * Returns the next page.
     *
     * @return integer
     */
    public function getNextPage()
    {
        return min($this->getPage() + 1, $this->getLastPage());
    }

    /**
     * Returns the first page number.
     *
     * @return integer
     */
    public function getFirstPage()
    {
        return 1;
    }

    /**
     * Returns the last page number.
     *
     * @return integer
     */
    public function getLastPage()
    {
        return ceil($this->getNbResults() / $this->getMaxPerPage());
    }

    /**
     * @return boolean
     */
    public function haveToPaginate()
    {
        return $this->getMaxPerPage() && $this->getNbResults() > $this->getMaxPerPage();
    }
}
