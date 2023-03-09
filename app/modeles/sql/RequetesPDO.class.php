<?php

/**
 * Classe des requêtes PDO 
 *
 */
class RequetesPDO {

  protected $sql;

  const UNE_SEULE_LIGNE = true;

  /**
   * Requête $sql SELECT de récupération d'une ou plusieurs lignes
   * @param array   $params paramètres de la requête préparée
   * @param boolean $uneSeuleLigne true si une seule ligne à récupérer false sinon 
   * @return array|false false si aucune ligne retournée par fetch
   */ 
  public function getLignes($params = [], $uneSeuleLigne = false) {
    $sPDO = SingletonPDO::getInstance();
    $oPDOStatement = $sPDO->prepare($this->sql);
    $nomsParams = array_keys($params);
    foreach ($nomsParams as $nomParam) $oPDOStatement->bindParam(':'.$nomParam, $params[$nomParam]);
    $oPDOStatement->execute();
    $result = $uneSeuleLigne ? $oPDOStatement->fetch(PDO::FETCH_ASSOC) : $oPDOStatement->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }
}