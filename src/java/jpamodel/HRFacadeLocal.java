/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package jpamodel;

import java.util.List;
import javax.ejb.Local;

/**
 *
 * @author belchiorpalma
 */
@Local
public interface HRFacadeLocal {
    Object queryByRange(String jpqlStmt, int firstResult, int maxResults);
    NeostoreProdutoCategoria persistNeostoreProdutoCategoria(NeostoreProdutoCategoria neostoreProdutoCategoria);
    NeostoreProdutoCategoria mergeNeostoreProdutoCategoria(NeostoreProdutoCategoria neostoreProdutoCategoria);
    void removeNeostoreProdutoCategoria(NeostoreProdutoCategoria neostoreProdutoCategoria);
    List<NeostoreProdutoCategoria> getNeostoreProdutoCategoriaFindAll();
    List<NeostoreProdutoCategoria> getNeostoreProdutoCategoriaFindById(int id);
    
}
