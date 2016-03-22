<?php

namespace JorgeHernan\Bundle\OdmRelationshipViewBundle\DataCollector;

use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ODM\MongoDB\DocumentManager;

/**
 * The OdmRelationshipDataCollector class.
 */
class OdmRelationshipDataCollector extends DataCollector
{
    protected $documentManager;

    /**
     *
     * @param $dm
     */
    public function __construct(DocumentManager $dm)
    {
        $this->documentManager = $dm;
    }
    /**
     * @param Request   $request   The request object
     * @param Response  $response  The response object
     * @param Exception $exception The exception
     */
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        $documentClassNames = $this->documentManager->getConfiguration()
            ->getMetadataDriverImpl()
            ->getAllClassNames();

        $i = 0;
        foreach ($documentClassNames AS $documentClassName) {
            $cm = $this->documentManager->getClassMetadata($documentClassName);
            $associations = $cm->associationMappings;
            if(count($associations) > 0){
                foreach($associations as $association){
                    $this->data['documents'][$i] = array(
                        'document' => $cm->getCollection(),
                        'mappings' => array(
                            'fieldName' => $association['fieldName'],
                            'type' => $association['type'],
                            'targetDocument' => $association['targetDocument']
                        )
                    );
                    $i++;
                }
            }
        }
    }

    public function getDocuments(){
        return $this->data['documents'];
    }

    /**
     * Returns the name of the debug collector.
     *
     * @return string
     */
    public function getName()
    {
        return 'jorgehernan.odm_relationship';
    }
}
