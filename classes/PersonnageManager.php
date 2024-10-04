<?php
include 'ConnectBdd.php';
class PersonnageManager extends ConnectBdd
{

    public function add(Personnage $personnage)
    {
        //var_dump($user);
        try {
            $requete = $this->_connection->prepare("INSERT INTO personnage (nom, type, civilisation, puissance, orientation, endurance, resistance)
                                                    VALUES (:nom, :type, :civilisation, :puissance, :orientation, :endurance, :resistance)");
            $requete->bindValue(':nom', $personnage->getNom());
            $requete->bindValue(':type', $personnage->getType());
            $requete->bindValue(':civilisation', $personnage->getCivilisation());
            $requete->bindValue(':puissance', $personnage->getPuissance());
            $requete->bindValue(':orientation', $personnage->getEndurance());
            $requete->bindValue(':endurance', $personnage->getOrientation());
            $requete->bindValue(':resistance', $personnage->getResistance());

            $requete->execute();
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }

    public function update(Personnage $Personnage)
    {
    }

    public function get($id)
    {
        try {
            $requete = $this->_connection->prepare("SELECT * FROM personnage WHERE id = :id");
            $requete->bindParam(":id", $id);
            $requete->execute();
            $personnage = $requete->fetch(PDO::FETCH_ASSOC);
            $personnageClass = new $personnage['type'];
            $personnageClass->setNom($personnage['nom']);
            $personnageClass->setType($personnage['type']);
            $personnageClass->setCivilisation($personnage['civilisation']);

            return $personnageClass;
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }

    public function getList($type)
    {
        try {
            $requete = $this->_connection->prepare("SELECT * FROM personnage WHERE type = :type");
            $requete->bindParam(":type", $type);
            $requete->execute();
            $characters = $requete->fetchAll(PDO::FETCH_ASSOC);
            $charactersType = array();
            foreach ($characters as $key => $value) {
                switch ($type) {
                    case 'Guerrier':
                        $charactersType[$key] = new Guerrier();
                        $charactersType[$key]->setId($value['id']);
                        $charactersType[$key]->setNom($value['nom']);
                        $charactersType[$key]->setType($value['type']);
                        $charactersType[$key]->setCivilisation($value['civilisation']);
                        $charactersType[$key]->setPuissance($value['puissance']);
                        $charactersType[$key]->setEndurance($value['endurance']);
                        $charactersType[$key]->setOrientation($value['orientation']);
                        $charactersType[$key]->setResistance($value['resistance']);
                        break;
                    case 'Ouvrier':
                        $charactersType[$key] = new Ouvrier();
                        $charactersType[$key]->setId($value['id']);
                        $charactersType[$key]->setNom($value['nom']);
                        $charactersType[$key]->setType($value['type']);
                        $charactersType[$key]->setCivilisation($value['civilisation']);
                        $charactersType[$key]->setPuissance($value['puissance']);
                        $charactersType[$key]->setEndurance($value['endurance']);
                        $charactersType[$key]->setOrientation($value['orientation']);
                        $charactersType[$key]->setResistance($value['resistance']);
                        break;
                    case 'Explorateur':
                        $charactersType[$key] = new Explorateur();
                        $charactersType[$key]->setId($value['id']);
                        $charactersType[$key]->setNom($value['nom']);
                        $charactersType[$key]->setType($value['type']);
                        $charactersType[$key]->setCivilisation($value['civilisation']);
                        $charactersType[$key]->setPuissance($value['puissance']);
                        $charactersType[$key]->setEndurance($value['endurance']);
                        $charactersType[$key]->setOrientation($value['orientation']);
                        $charactersType[$key]->setResistance($value['resistance']);
                        break;
                    default:
                        echo "la classe du personnage n'existe pas !";
                        break;
                }
            }
            return $charactersType;
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }

    public function delete(Personnage $Personnage)
    {
    }

    public function checkName($name)
    {
        try {
            $requete = $this->_connection->prepare("SELECT COUNT(*) FROM personnage WHERE nom = :nom");
            $requete->bindParam(":nom", $name);
            $requete->execute();
            return $requete->fetchColumn();
        } catch (PDOException $e) {
            echo 'Erreur:' . $e->getMessage();
        }
    }
}
