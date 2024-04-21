package hn.unah.lenguajes.demo.entities;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;
import jakarta.persistence.OneToOne;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "usuarios")
@Data
public class Usuario {
    
    @Id
    @Column(name = "idusuario")
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int idusuario;

    @Column(name = "nombreUsuario")
    private String nombreUsuario;

    @Column(name = "contraseniausuario")
    private String contraseniausuario;

    @OneToOne(mappedBy = "usuario")
    private Cliente cliente;

}
