<?php

namespace Oro\Bundle\ShoppingListBundle\Tests\Behat\Element;

use Symfony\Component\DomCrawler\Crawler;

use Oro\Bundle\TestFrameworkBundle\Behat\Element\TableHeader;

class InlineMatrixHeader extends TableHeader
{
    /**
     * Try to guess header and return column number
     *
     * @param string $headerText Header of table column
     * @return int column number
     */
    public function getColumnNumber($headerText)
    {
        $crawler = new Crawler($this->getHtml());

        $i = 0;
        $headers = [];

        /** @var \DOMElement $th */
        foreach ($crawler->filter('.matrix-order-widget__form__col') as $th) {
            $currentHeader = trim($th->textContent);
            if (strtolower($currentHeader) === strtolower($headerText)) {
                return $i;
            }

            $i++;
            $headers[] = $currentHeader;
        }

        self::fail(sprintf(
            'Can\'t find link with "%s" header, available headers: %s',
            $headerText,
            implode(', ', $headers)
        ));
    }

    /**
     * Checks if table header has such column name
     *
     * @param $columnName
     * @return bool
     */
    public function hasColumn($columnName)
    {
        $crawler = new Crawler($this->getHtml());

        /** @var \DOMElement $th */
        foreach ($crawler->filter('.matrix-order-widget__form__col') as $th) {
            if (strtolower($th->textContent) === strtolower($columnName)) {
                return true;
            }
        }

        return false;
    }
}
