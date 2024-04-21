package hn.unah.lenguajes.demo.entities;

import java.time.LocalDate;
import java.util.List;

import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.Id;
import jakarta.persistence.ManyToMany;
import jakarta.persistence.Table;
import lombok.Data;

@Entity
@Table(name = "ingredientes")
@Data

public class Ingrediente {
    
    @Id
    @Column(name = "idingrediente")
    private long idingrediente;
    
    @Column(name = "nombreingrediente")
    private String nombreingrediente;

    private double precio;

    private int cantidad;

    @Column(name = "fechacaducidad")
    private LocalDate fechacaducidad;

    @ManyToMany(mappedBy = "ingrediente")
    private List<Proveedor> proveedor;

    @ManyToMany(mappedBy = "ingrediente")
    private List<Comida> comida;
}
