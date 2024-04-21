package hn.unah.lenguajes.demo.repositories;

import org.springframework.data.repository.CrudRepository;

import hn.unah.lenguajes.demo.entities.Usuario;

public interface UsuarioRepository extends CrudRepository <Usuario, String>{

}
