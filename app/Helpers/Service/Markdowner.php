<?php

namespace App\Helpers\Service;
use Parsedown;
use League\HTMLToMarkdown\HtmlConverter;

class Markdowner{

    /**
     * @var HtmlConverter
     */
    protected $htmlConverter;

    /**
     * @var Parsedown
     */
    protected $markdownConverter;

    /**
     * Markdowner constructor.
     */
    public function __construct()
    {
        $this->htmlConverter = new HtmlConverter();

        $this->markdownConverter = new Parsedown();
    }

    /**
     * Convert Markdown To Html.
     *
     * @param $markdown
     * @return string
     */
    public function convertMarkdownToHtml($markdown)
    {
        $convertedHmtl = $this->markdownConverter
            ->setBreaksEnabled(true)
            ->text($markdown);
        //$convertedHmtl = str_replace("<pre><code>", '<pre><code class=" language-php">', $convertedHmtl);
        return $convertedHmtl;

    }

    /**
     * Convert Html To Markdown.
     *
     * @param $html
     * @return string
     */
    public function convertHtmlToMarkdown($html)
    {
        return $this->htmlConverter->convert($html);
    }

}