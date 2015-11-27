/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package test;

/**
 *
 * @author belchiorpalma
 */
public class Categoria implements ICategoria {
    private int idCategoria;
    @Override
    public int getIdCategoria() {
        return this.idCategoria;
    }

    public void setIdCategoria(int idCategoria) {
        this.idCategoria = idCategoria;
    }

    @Override
    public void print() {
        System.out.println("Categoria:"+this.idCategoria);
    }
    
    
}
