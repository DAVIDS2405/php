<?php

interface ReportInterface
{
    public function generate(string $content);
}
class PDFReport implements ReportInterface
{
    public function generate(string $content)
    {
        echo "Se crea pdf con el contenido $content";
    }
}

class HTMLReport implements ReportInterface
{
    public function generate(string $content)
    {
        echo "Se crea html con el contenido $content";
    }
}



class Estimate
{
    private ReportInterface $report;

    public function __construct(ReportInterface $report)
    {
        $this->report = $report;
    }

    public function process()
    {
        echo "Se hace la estimación";
        $this->report->generate("Contenido de la estimación");
    }
}
$pdfReport = new PDFReport();
$estimate = new Estimate($pdfReport);
